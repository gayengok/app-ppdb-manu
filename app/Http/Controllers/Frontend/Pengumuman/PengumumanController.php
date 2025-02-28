<?php

namespace App\Http\Controllers\Frontend\Pengumuman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Artikel;

class PengumumanController extends Controller
{
    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();

        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();

        return view('frontend.pengumuman.pengumuman', compact('pengumuman',  'artikel'));
    }
}
