<?php

namespace App\Http\Controllers\Backend\PPDB\Dashboard\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;

class DokumenSiswaController extends Controller
{
    public function index()
    {
        return view('backend.admin.pendaftaran.dokument-ppdb.dokumen_siswa');
    }

    // Menyimpan Dokumen
    public function documen(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kk' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'akta_kelahiran' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'kip_pkh' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'ktp_ortu' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'ijazah_skl' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $dokumens = Dokumen::create([
            'nama' => $request->input('nama'),
            'kk' => $request->file('kk')->store('uploads/documents', 'public'),
            'akta_kelahiran' => $request->file('akta_kelahiran')->store('uploads/documents', 'public'),
            'kip_pkh' => $request->file('kip_pkh') ? $request->file('kip_pkh')->store('uploads/documents', 'public') : null,
            'ktp_ortu' => $request->file('ktp_ortu')->store('uploads/documents', 'public'),
            'ijazah_skl' => $request->file('ijazah_skl')->store('uploads/documents', 'public'),
        ]);

        return redirect()->route('upload_dokumen.index')->with('success', 'Dokumen berhasil diunggah.');
    }
}
