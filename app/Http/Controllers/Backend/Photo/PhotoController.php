<?php

namespace App\Http\Controllers\Backend\Photo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    /**
     * Menampilkan daftar foto.
     */
    public function index()
    {
        $user = Auth::user();
        $photos = Photo::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.gallery.photo.photo', compact('photos', 'user'));
    }

    /**
     * Menampilkan form upload foto.
     */
    public function create()
    {
        $user = Auth::user();
        return view('backend.gallery.photo.create', compact('user'));
    }

    /**
     * Proses upload foto ke storage dan database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('photos', 'public');

        Photo::create([
            'title' => $request->title,
            'photo_path' => $photoPath,
        ]);

        return redirect()->route('photo.index')->with('success', 'Photo uploaded successfully!');
    }

    /**
     * Menghapus foto dari storage dan database.
     */
    public function destroy($id)
    {

        $photo = Photo::findOrFail($id);

        if (Storage::disk('public')->exists($photo->photo_path)) {
            Storage::disk('public')->delete($photo->photo_path);
        }

        $photo->delete();

        return redirect()->route('photo.index')->with('success', 'Photo deleted successfully!');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $photo = Photo::findOrFail($id);
        return view('backend.gallery.photo.edit', compact('photo', 'user'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data berdasarkan ID
        $photo = Photo::findOrFail($id);

        // Update title
        $photo->title = $request->title;

        // Jika ada foto baru yang diupload
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($photo->photo_path && Storage::exists('public/' . $photo->photo_path)) {
                Storage::delete('public/' . $photo->photo_path);
            }

            // Simpan foto baru
            $path = $request->file('photo')->store('photos', 'public');
            $photo->photo_path = $path;
        }

        // Simpan perubahan
        $photo->save();

        return redirect()->route('photo.index')->with('success', 'Photo updated successfully.');
    }
}
