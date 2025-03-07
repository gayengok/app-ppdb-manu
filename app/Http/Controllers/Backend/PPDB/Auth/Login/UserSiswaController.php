<?php

namespace App\Http\Controllers\Backend\PPDB\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserSiswa;

class UserSiswaController extends Controller
{
    public function index()
    {
        return view('backend.admin.login-siswa.login_siswa');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nik' => 'required|digits:16',
            'password' => 'required'
        ]);

        if (Auth::guard('usersiswa')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('app')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['nik' => 'NIK atau password salah.'])->withInput();
    }




    public function logout()
    {
        Auth::guard('usersiswa')->logout();
        return redirect()->route('login.siswa'); // Redirect ke halaman login setelah logout
    }
}
