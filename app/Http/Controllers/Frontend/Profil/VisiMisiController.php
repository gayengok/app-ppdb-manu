<?php

namespace App\Http\Controllers\Frontend\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class VisiMisiController extends Controller
{
    public function visiMisi()
    {
        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();

        return view('frontend.profil.visi-misi', compact('artikel'));
    }
}
