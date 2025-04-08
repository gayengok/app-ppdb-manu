<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Informasi;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query'); // Ambil input pencarian

        $query = $request->input('query');

        // Pencarian di model Berita
        $artikels = Artikel::where('title', 'ilike', '%' . $query . '%')
            ->orWhere('content', 'ilike', '%' . $query . '%')
            ->get();

        // $informasis = Informasi::when($query, function ($q) use ($query) {
        //     return $q->where('judul', 'like', '%' . $query . '%')
        //         ->orWhere('deskripsi', 'like', '%' . $query . '%');
        // })
        //     ->orderBy('created_at', 'desc')
        //     ->limit(5)
        //     ->get();

        // Kirim hasil pencarian ke view
        return view('frontend.search_results', compact('artikels', 'query'));
    }
}
