<?php

namespace App\Http\Controllers\Frontend\Informasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Informasi;
use App\Models\UploadPendaftaran;

class PPDBController extends Controller
{
    public function index()
    {
        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();
        $uploadpendaftarans = UploadPendaftaran::all();

        $informasis = Informasi::orderBy('created_at', 'desc')->limit(5)->get();

        return view('frontend.ppdb.inf_ppdb', compact('artikel', 'informasis', 'uploadpendaftarans'));
    }
}
