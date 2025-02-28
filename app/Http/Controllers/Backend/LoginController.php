<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('backend.login.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard')->with('success', 'Selamat datang di Dashboard!');
        }
        return back()->with('error', 'Email atau Password salah.');
    }


    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
