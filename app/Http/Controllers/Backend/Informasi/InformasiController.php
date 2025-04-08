<?php

namespace App\Http\Controllers\Backend\Informasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class InformasiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        $informasis = Informasi::orderBy('created_at', 'desc')->limit(5)->get();


        return view('backend.informasi.ppdb.upload_inf_ppdb', compact('informasis', 'notifications', 'user'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tahap' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'deskripsi' => 'required|string'
        ]);

        try {
            // Jika input adalah rentang tanggal, ambil tanggal pertama
            if (strpos($validatedData['tanggal'], ' - ') !== false) {
                $dates = explode(' - ', $validatedData['tanggal']);
                $validatedData['tanggal'] = trim($dates[0]);
            }

            $informasi = new Informasi();
            $informasi->tahap = $validatedData['tahap'];
            $informasi->tanggal = $validatedData['tanggal'];
            $informasi->deskripsi = $validatedData['deskripsi'];
            $informasi->save();

            return redirect()->back()->with('success', 'Jadwal berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan jadwal: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tahap' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'deskripsi' => 'required|string'
        ]);

        try {
            // Jika input adalah rentang tanggal, ambil tanggal pertama
            if (strpos($validatedData['tanggal'], ' - ') !== false) {
                $dates = explode(' - ', $validatedData['tanggal']);
                $validatedData['tanggal'] = trim($dates[0]);
            }

            $informasi = Informasi::findOrFail($id);
            $informasi->tahap = $validatedData['tahap'];
            $informasi->tanggal = $validatedData['tanggal'];
            $informasi->deskripsi = $validatedData['deskripsi'];
            $informasi->save();

            return redirect()->back()->with('success', 'Jadwal berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui jadwal: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();

        return redirect()->back()->with('success', 'Jadwal berhasil dihapus');
    }

    /**
     * Konversi nama bulan dari bahasa Indonesia ke bahasa Inggris
     */
    private function convertIndonesianDateToEnglish($date)
    {
        $months = [
            'Januari' => 'January',
            'Februari' => 'February',
            'Maret' => 'March',
            'April' => 'April',
            'Mei' => 'May',
            'Juni' => 'June',
            'Juli' => 'July',
            'Agustus' => 'August',
            'September' => 'September',
            'Oktober' => 'October',
            'November' => 'November',
            'Desember' => 'December'
        ];

        // Pastikan format tanggal sesuai "23 Desember 2025"
        return str_replace(array_keys($months), array_values($months), trim($date));
    }
}
