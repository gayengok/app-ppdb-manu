<?php

namespace App\Http\Controllers\Backend\PPDB\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppSiswaController extends Controller
{
    public function index()
    {
        return view('backend.admin.index');
    }
}
