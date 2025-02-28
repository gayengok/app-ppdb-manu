<?php

namespace App\Http\Controllers\Backend\Berita;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $query = Artikel::query();

        if ($request->has('search') && !empty($request->search)) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $artikels = Artikel::orderBy('published_date', 'desc')->paginate(10);

        $user = Auth::user();
        return view('backend.news.published', compact('artikels', 'user'))->with('search', $request->search);
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:120',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
            'status' => 'required|string|in:Published,Draft',
            'author' => 'required|string|max:25',
            'published_date' => 'required|date',
            'short_description' => 'nullable|string|max:130',
        ], [
            'title.max' => 'Judul tidak boleh lebih dari 120 karakter.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'content.required' => 'Konten tidak boleh kosong.',
            'status.in' => 'Status harus berupa Published atau Draft.',
            'author.max' => 'Nama penulis tidak boleh lebih dari 25 karakter.',
            'published_date.date' => 'Tanggal terbit harus berupa format tanggal yang valid.',
            'short_description.max' => 'Deskripsi singkat tidak boleh lebih dari 150 karakter.',
        ]);

        // Handle the image upload if exists
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        // Create the article
        Artikel::create([
            'title' => $request->title,
            'image' => $imagePath,
            'content' => $request->content,
            'status' => $request->status,
            'author' => $request->author,
            'published_date' => $request->published_date,
            'short_description' => $request->short_description,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('news.berita')->with('success', 'Article created successfully!');
    }



    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('news.berita')->with('success', 'Artikel deleted successfully.');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $artikel = Artikel::findOrFail($id);

        return view('backend.news.edit-artikel', compact('artikel', 'user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:150',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
            'status' => 'required|string|in:Published,Draft',
            'author' => 'required|string|max:25',
            'published_date' => 'required|date',
            'short_description' => 'nullable|string|max:150',
        ], [
            'title.max' => 'Judul tidak boleh lebih dari 150 karakter.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'content.required' => 'Konten tidak boleh kosong.',
            'status.in' => 'Status harus berupa Published atau Draft.',
            'author.max' => 'Nama penulis tidak boleh lebih dari 25 karakter.',
            'published_date.date' => 'Tanggal terbit harus berupa format tanggal yang valid.',
            'short_description.max' => 'Deskripsi singkat tidak boleh lebih dari 150 karakter.',
        ]);

        $artikel = Artikel::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($artikel->image) {
                Storage::disk('public')->delete($artikel->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $artikel->image;
        }

        $artikel->update([
            'title' => $request->title,
            'image' => $imagePath,
            'content' => $request->content,
            'status' => $request->status,
            'author' => $request->author,
            'published_date' => $request->published_date,
            'short_description' => $request->short_description,
        ]);

        return redirect()->route('news.berita')->with('success', 'Article updated successfully!');
    }



    public function post()
    {
        $user = Auth::user();
        return view('backend.news.new-artikel', compact('user'));
    }
}
