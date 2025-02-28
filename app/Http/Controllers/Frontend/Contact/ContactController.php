<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ContactController extends Controller
{
    public function index()
    {
        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();
        return view('frontend.contact.contact', compact('artikel'));
    }
}
