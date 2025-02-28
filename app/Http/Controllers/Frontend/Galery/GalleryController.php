<?php

namespace App\Http\Controllers\Frontend\Galery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Artikel;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('created_at', 'desc')->paginate(9);

        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();

        return view('frontend.galery.galery', compact('photos', 'artikel'));
    }



    public function video()
    {
        $videos = Video::all()->sortByDesc('created_at');

        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();

        return view('frontend.galery.galery-video', compact('videos', 'artikel'));
    }
}
