<?php

namespace App\Http\Controllers\Backend\PPDB\Pengumuman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuizAttempt;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\Auth;

class KelulusanController extends Controller
{
    public function index()
    {
        $loggedInStudent = Auth::guard('calonsiswa')->user();

        if (!$loggedInStudent) {
            return redirect()->route('login_siswa')->with('error', 'Silakan login terlebih dahulu.');
        }


        $attempts = QuizAttempt::orderBy('created_at', 'desc')->paginate(10);

        return view('backend.admin.pengumuman.kelulusan', compact('attempts', 'loggedInStudent'));
    }

    public function cetakPdf($id)
    {
        $attempt = QuizAttempt::findOrFail($id);

        $signaturePath = public_path('backend/assets/img/ttd-kepsek.png');
        $signatureBase64 = '';

        if (file_exists($signaturePath)) {
            $signatureBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($signaturePath));
        }

        $pdf = PDF::loadView(
            'backend.admin.pengumuman.surat_kelulusan',
            compact('attempt', 'signatureBase64')
        );

        $pdf->setPaper('a4', 'portrait');
        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
            'defaultFont' => 'times'
        ]);

        return $pdf->download('Surat_Kelulusan_' . $attempt->student_name . '.pdf');
    }
}
