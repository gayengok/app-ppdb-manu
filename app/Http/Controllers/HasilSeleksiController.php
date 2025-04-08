<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;


class HasilSeleksiController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $student = Auth::guard('calonsiswa')->user();
        $students = Student::orderBy('created_at', 'desc')->paginate(5);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.students.hasil-seleksi', compact('students', 'notifications', 'user'));
    }





    // Fungsi untuk mencetak PDF
    // public function printPDF()
    // {
    //     $hasilSeleksi = HasilSeleksi::all();
    //     $pdf = PDF::loadView('backend.students.cetak-pdf', compact('hasilSeleksi'));
    //     return $pdf->download('hasil-seleksi.pdf');
    // }
}
