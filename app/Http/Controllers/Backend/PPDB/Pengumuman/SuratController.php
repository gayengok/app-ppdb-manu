<?php

namespace App\Http\Controllers\Backend\PPDB\Pengumuman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuizAttempt;
use Barryvdh\DomPDF\Facade\Pdf;

class SuratController extends Controller
{
    public function index()
    {

        $attempts = QuizAttempt::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.admin.pengumuman.surat_kelulusan', compact('attempts'));
    }
}
