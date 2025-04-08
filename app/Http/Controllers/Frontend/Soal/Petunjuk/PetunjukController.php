<?php

namespace App\Http\Controllers\Frontend\Soal\Petunjuk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use App\Models\CalonSiswa;

class PetunjukController extends Controller
{
    public function index()
    {
        $loggedInStudent = Auth::guard('calonsiswa')->user();

        if (!$loggedInStudent) {
            return redirect()->route('login_siswa')->with('error', 'Silakan login terlebih dahulu.');
        }


        $user = Auth::user();
        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.admin.pendaftaran.test_ppdb.petunjuk', compact('user', 'notifications', 'artikel', 'loggedInStudent'));
    }
}
