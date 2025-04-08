<?php

namespace App\Http\Controllers\Backend\PPDB\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use App\Models\CalonSiswa;

class AppSiswaController extends Controller
{
    public function index()
    {

        $loggedInStudent = Auth::guard('calonsiswa')->user();

        if (!$loggedInStudent) {
            return redirect()->route('login_siswa')->with('error', 'Silakan login terlebih dahulu.');
        }

        $students = Student::orderBy('created_at', 'desc')->paginate(5);

        return view('backend.admin.index', compact('students', 'loggedInStudent'));
    }
}
