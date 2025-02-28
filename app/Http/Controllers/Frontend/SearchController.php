<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query'); // Ambil input pencarian

        // Validasi input pencarian (opsional)
        $request->validate([
            'query' => 'required|string|min:3',
        ]);

        // Pencarian data di model yang sesuai
        $artikels = Artikel::where('title', 'like', '%' . $query . '%')
            ->get();

        // Kirim hasil pencarian ke view
        return view('frontend.search_results', compact('artikels', 'query'));
    }
}
