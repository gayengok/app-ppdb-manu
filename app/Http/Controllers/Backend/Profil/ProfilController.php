<?php

namespace App\Http\Controllers\Backend\Profil;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $sejarahs = Sejarah::paginate(10);
        return view('backend.profil.profil', compact('sejarahs', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('backend.profil.create', compact('user'));
    }

    // Menyimpan Sejarah baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('img')->store('public/sejarah_images');

        Sejarah::create([
            'deskripsi' => $request->deskripsi,
            'img' => basename($imagePath),
        ]);

        return redirect()->route('sejarah.index')->with('success', 'Sejarah berhasil ditambahkan');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $sejarah = Sejarah::findOrFail($id);
        return view('backend.profil.edit', compact('sejarah', 'user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $sejarah = Sejarah::findOrFail($id);
        $data = $request->only('deskripsi');

        if ($request->hasFile('img')) {
            if ($sejarah->img && file_exists(storage_path('app/public/sejarah_images/' . $sejarah->img))) {
                unlink(storage_path('app/public/sejarah_images/' . $sejarah->img));
            }

            $imagePath = $request->file('img')->store('public/sejarah_images');
            $data['img'] = basename($imagePath);
        }

        $sejarah->update($data);

        return redirect()->route('sejarah.index')->with('success', 'Sejarah berhasil diperbarui');
    }


    // Menghapus data Sejarah
    public function destroy($id)
    {
        $sejarah = Sejarah::findOrFail($id);

        Storage::delete('public/sejarah_images/' . $sejarah->img);

        $sejarah->delete();

        return redirect()->route('sejarah.index')->with('success', 'Sejarah berhasil dihapus');
    }
}
