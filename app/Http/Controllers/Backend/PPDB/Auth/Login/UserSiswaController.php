<?php

namespace App\Http\Controllers\Backend\PPDB\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class UserSiswaController extends Controller
{
    public function index()
    {
        return view('backend.admin.login-siswa.login_siswa');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nisn' => 'required|digits:10',
            'password' => 'required|min:6'
        ]);


        if (Auth::guard('calonsiswa')->attempt(['nisn' => $request->nisn, 'password' => $request->password])) {
            $user = Auth::guard('calonsiswa')->user();
            $request->session()->put('calonsiswa', $user->id);

            return redirect()->route('app')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['nisn' => 'NISN atau password salah.'])->withInput();
    }




    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus session user
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login_siswa')->with('success', 'Anda telah berhasil logout.');
    }
}
