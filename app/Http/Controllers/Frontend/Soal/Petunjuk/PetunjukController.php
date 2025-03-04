<?php

namespace App\Http\Controllers\Frontend\Soal\Petunjuk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;

class PetunjukController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('frontend.test-soal.petunjuk.petunjuk', compact('user', 'notifications', 'artikel'));
    }
}
