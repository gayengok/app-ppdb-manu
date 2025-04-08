<?php

namespace App\Http\Controllers\Backend\PPDB\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\CalonSiswa;

class RegisterSiswaController extends Controller
{
    public function index()
    {
        return view('backend.admin.login-siswa.register_siswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required|digits:10|unique:calon_siswas,nisn',
            'email' => 'required|email|unique:calon_siswas,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = CalonSiswa::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('calonsiswa')->login($user);

        return redirect()->route('login_siswa')->with('success', 'Registrasi berhasil, Anda telah login.');
    }
}
