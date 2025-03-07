<?php

namespace App\Http\Controllers\Backend\PPDB\Dashboard\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokumenSiswaController extends Controller
{
    public function index()
    {
        return view('backend.admin.pendaftaran.dokument-ppdb.dokumen_siswa');
    }
}
