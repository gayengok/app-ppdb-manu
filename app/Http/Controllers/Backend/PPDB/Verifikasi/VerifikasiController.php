<?php

namespace App\Http\Controllers\Backend\PPDB\Verifikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\Auth;

class VerifikasiController extends Controller
{
    public function index()
    {
        $loggedInStudent = Auth::guard('calonsiswa')->user();

        if (!$loggedInStudent) {
            return redirect()->route('login_siswa')->with('error', 'Silakan login terlebih dahulu.');
        }
        $students = Student::orderBy('created_at', 'desc')->paginate(5);

        return view('backend.admin.verifikasi.verifikasi', compact('students', 'loggedInStudent'));
    }
}
