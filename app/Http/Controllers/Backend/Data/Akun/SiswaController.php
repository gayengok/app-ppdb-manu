<?php

namespace App\Http\Controllers\Backend\Data\Akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\Hash;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        $calon_siswas = CalonSiswa::orderBy('created_at', 'desc')->paginate(10);

        return view('backend.pengaturan.data_akun.akun_siswa', compact('calon_siswas', 'notifications', 'user'));
    }


    public function destroy($id)
    {
        $siswa = CalonSiswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Akun siswa berhasil dihapus.');
    }
}
