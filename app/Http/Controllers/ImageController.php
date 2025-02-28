<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {

        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Nama file unik
            $imagePath = $image->storeAs('public/images', $imageName); // Menyimpan file


            return response()->json([
                'url' => asset('storage/images/' . $imageName),
            ]);
        }

        return response()->json(['error' => 'Gambar tidak valid'], 400);
    }
}
