<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Show the profile edit page
    public function edit()
    {
        $user = Auth::user();  // This should return an instance of the User model
        return view('backend.profil.profil', compact('user'));
    }
}
