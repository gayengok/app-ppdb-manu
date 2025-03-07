<?php

namespace App\Http\Controllers\Backend\PPDB\Dashboard\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Student;

class IdentitasSiswaController extends Controller
{
    public function index()
    {
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.admin.pendaftaran.syarat-ppdb.data-identitas', compact('notifications'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'kabupaten' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email',
            'no_hp' => 'required|string|max:15',
            'sekolah_asal' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'no_hp_ortu' => 'required|string|max:15',
        ]);

        // Simpan data ke database
        $student = Student::create($request->all());

        // Simpan notifikasi
        Notification::create([
            'message' => '📋 Data pendaftaran ' . $student->nama_lengkap . ' telah masuk. Segera periksa untuk verifikasi!',
            'is_read' => false,
        ]);

        return redirect()->route('identitas_siswa.index')->with('success', 'Pendaftaran berhasil disimpan.');
    }
}
