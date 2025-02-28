<?php

namespace App\Http\Controllers\Backend\Absensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function showForm()
    {
        $siswa = Siswa::where('kelas', '10')->get(); // Mengambil data siswa kelas 10
        return view('absensi', compact('siswa'));
    }

    public function store(Request $request)
    {
        // Menyimpan data absensi
        $tanggal = $request->input('tanggal');
        $kehadiran = $request->input('kehadiran');

        foreach ($kehadiran as $siswaId => $status) {
            // Simpan ke tabel absensi (tabel ini perlu dibuat terlebih dahulu)
            \DB::table('absensi')->insert([
                'siswa_id' => $siswaId,
                'tanggal' => $tanggal,
                'status' => $status,
            ]);
        }

        return redirect()->route('absensi.form')->with('success', 'Absensi berhasil disimpan!');
    }
}
