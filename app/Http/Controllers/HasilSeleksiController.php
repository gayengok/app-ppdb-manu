<?php

namespace App\Http\Controllers;

use App\Models\HasilSeleksi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class HasilSeleksiController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $hasilSeleksi = HasilSeleksi::orderBy('created_at', 'desc')->paginate(5);

        return view('backend.students.hasil-seleksi', compact('hasilSeleksi', 'user'));
    }

    // Mengupdate status siswa (Lolos/Gagal)
    public function update(Request $request, $id)
    {

        $hasil = HasilSeleksi::findOrFail($id);
        $hasil->status = $hasil->status === 'Lolos' ? 'Tidak Lolos' : 'Lolos';
        $hasil->save();
        return redirect()->route('hasil_seleksi.index')->with('success', 'Status berhasil diperbarui!');
    }



    public function destroy($id)
    {
        $hasil = HasilSeleksi::findOrFail($id);
        $hasil->delete();
        return redirect()->route('hasil_seleksi.index')->with('success', 'Data berhasil dihapus!');
    }


    public function create()
    {
        $user = Auth::user();
        return view('backend.students.create-hasil', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'status' => 'required|in:Lolos,Tidak Lolos',
        ]);

        HasilSeleksi::create([
            'nama_lengkap' => $request->nama_lengkap,
            'status' => $request->status,
        ]);

        return redirect()->route('hasil_seleksi.index')->with('success', 'Data hasil seleksi berhasil ditambahkan!');
    }

    // Fungsi untuk mencetak PDF
    public function printPDF()
    {
        $hasilSeleksi = HasilSeleksi::all();
        $pdf = PDF::loadView('backend.students.cetak-pdf', compact('hasilSeleksi'));
        return $pdf->download('hasil-seleksi.pdf');
    }
}
