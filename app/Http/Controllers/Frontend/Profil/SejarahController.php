<?php

namespace App\Http\Controllers\Frontend\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sejarah;
use App\Models\Artikel;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarahs = Sejarah::paginate(10);

        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();

        return view('frontend.profil.sejarah', compact('sejarahs', 'artikel'));
    }
}
