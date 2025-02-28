<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class NewsController extends Controller
{
    public function index()
    {
        $artikels = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->paginate(9);
        return view('frontend.blog.news', compact('artikels'));
    }
}
