<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UploadPendaftaran;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class UploadPendaftaranController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $uploadpendaftarans = UploadPendaftaran::all();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.upload-pendaftaran.upload-pendaftaran', compact('uploadpendaftarans', 'notifications', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.upload-pendaftaran.create-pendaftaran', compact('notifications', 'user'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'deskripsi' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        UploadPendaftaran::create([
            'deskripsi' => $request->input('deskripsi'),
            'image_path' => $imagePath,
        ]);

        return redirect()->route('upload-pendaftaran.index')->with('success', 'Data berhasil ditambahkan!');
    }


    // Menampilkan form untuk edit data
    public function edit($id)
    {
        $user = Auth::user();
        $uploadPendaftaran = UploadPendaftaran::findOrFail($id);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.upload-pendaftaran.edit', compact('uploadPendaftaran', 'notifications', 'user'));
    }

    // Menyimpan perubahan data
    public function update(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar bersifat opsional
        ]);

        $uploadPendaftaran = UploadPendaftaran::findOrFail($id);

        $uploadPendaftaran->deskripsi = $request->input('deskripsi');

        // Update gambar 
        if ($request->hasFile('image')) {

            if (file_exists(public_path('storage/' . $uploadPendaftaran->image_path))) {
                unlink(public_path('storage/' . $uploadPendaftaran->image_path));
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('uploads', 'public');
            $uploadPendaftaran->image_path = $imagePath;
        }

        $uploadPendaftaran->save();

        return redirect()->route('upload-pendaftaran.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $uploadPendaftaran = UploadPendaftaran::findOrFail($id);

        if (file_exists(public_path('storage/' . $uploadPendaftaran->image_path))) {
            unlink(public_path('storage/' . $uploadPendaftaran->image_path));
        }

        $uploadPendaftaran->delete();

        return redirect()->route('upload-pendaftaran.index')->with('success', 'Data berhasil dihapus!');
    }
}
