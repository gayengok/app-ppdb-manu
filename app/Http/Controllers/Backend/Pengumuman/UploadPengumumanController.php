<?php

namespace App\Http\Controllers\Backend\Pengumuman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UploadPengumumanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pengumuman = Pengumuman::all();
        return view('backend.pengumuman.upload', compact('pengumuman', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('backend.pengumuman.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:200',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $path = $request->file('file')->store('uploads/pengumuman', 'public');

        Pengumuman::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file_path' => $path,
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diunggah.');
    }

    public function show($id)
    {
        $user = Auth::user();
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pengumuman.show', compact('pengumuman', 'user'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $pengumuman = Pengumuman::findOrFail($id);
        return view('backend.pengumuman.edit', compact('pengumuman', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:200',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->judul = $request->judul;
        $pengumuman->deskripsi = $request->deskripsi;


        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads/pengumuman', 'public');
            Storage::delete('public/' . $pengumuman->file_path);
            $pengumuman->file_path = $path;
        }

        $pengumuman->save();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        Storage::delete('public/' . $pengumuman->file_path);
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
}
