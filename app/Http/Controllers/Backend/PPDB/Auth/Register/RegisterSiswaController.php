<?php

namespace App\Http\Controllers\Backend\PPDB\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\UserSiswa;

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
            'nik' => 'required|digits:16|unique:usersiswas,nik', // Sesuaikan dengan tabel yang benar
            'email' => 'required|email|unique:usersiswas,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = UserSiswa::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('usersiswa')->login($user);

        return redirect()->route('app')->with('success', 'Registrasi berhasil, Anda telah login.');
    }
}
