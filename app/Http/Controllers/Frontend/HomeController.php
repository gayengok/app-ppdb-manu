<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\UploadPendaftaran;
use App\Models\Photo;
use App\Models\Artikel;
use App\Models\Student;
use App\Models\Guru;
use App\Models\KelasSepuluh;
use App\Models\kelasSebelas;
use App\Models\KelasDuaBelas;

class HomeController extends Controller
{
    /**
     * Show the landing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        $uploadpendaftarans = UploadPendaftaran::all();
        $photos = Photo::orderBy('created_at', 'desc')->paginate(3);
        $artikels = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->paginate(3);

        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();
        $newStudentsCount = Student::where('created_at', '>=', now()->startOfYear())->count();

        $jumlahGuru = Guru::count();

        $totalSiswaKelas10 = KelasSepuluh::count();
        $totalSiswaKelas11 = kelasSebelas::count();
        $totalSiswaKelas12 = KelasDuaBelas::count();

        $totalSiswa = $totalSiswaKelas10 + $totalSiswaKelas11 + $totalSiswaKelas12;

        return view('frontend.pages.landingpage', compact(
            'pengumuman',
            'uploadpendaftarans',
            'photos',
            'artikels',
            'artikel',
            'newStudentsCount',
            'totalSiswa',
            'jumlahGuru',
            'totalSiswaKelas10',
            'totalSiswaKelas11',
            'totalSiswaKelas12'
        ));
    }
}
