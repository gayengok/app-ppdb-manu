<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArticleController extends Controller
{
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);

        $relatedArticles = Artikel::where('id', '!=', $id)->latest()->take(3)->get();

        return view('frontend.blog.article', compact('artikel', 'relatedArticles'));
    }
}
