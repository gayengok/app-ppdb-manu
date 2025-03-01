<?php

namespace App\Http\Controllers\Backend\DataSiswa\KelasSepuluh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KelasSepuluh;
use App\Models\kelasSebelas;
use App\Models\KelasDuaBelas;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class KelasSepuluhController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $kelasSebelas = KelasSebelas::all();
        $kelasSepuluhs = KelasSepuluh::all();
        $kelasDuaBelas = KelasDuaBelas::all();

        $totalSiswaKelas10 = $kelasSepuluhs->count();
        $totalSiswaKelas11 = $kelasSebelas->count();
        $totalSiswaKelas12 = $kelasDuaBelas->count();

        $totalSiswa = $totalSiswaKelas10 + $totalSiswaKelas11 + $totalSiswaKelas12;

        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('backend.data-siswa.kelas-10.data-kelas-10', compact('kelasSepuluhs', 'kelasSebelas', 'kelasDuaBelas', 'notifications', 'user', 'totalSiswa'));
    }

    public function create()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.data-siswa.kelas-10.create-data-kelas-10', compact('notifications', 'user',));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:kelasSepuluhs,nisn|max:10',
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'address' => 'required|string|max:255',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        // Debug data yang diterima
        // dd($request->all());

        KelasSepuluh::create($request->all());

        $totalSiswa = KelasSepuluh::count();

        return redirect()->route('kelas-10.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $kelasSepuluh = KelasSepuluh::findOrFail($id);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.data-siswa.kelas-10.edit-data-kelas-10', compact('kelasSepuluh', 'user', 'notifications'));
    }

    // Memperbarui data siswa
    public function update(Request $request, $id)
    {

        $request->validate([
            'nisn' => 'required|max:10|unique:kelasSepuluhs,nisn,' . $id,
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'address' => 'required|string|max:255',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $kelasSepuluhs = KelasSepuluh::findOrFail($id);

        $kelasSepuluhs->update($request->only([
            'nisn',
            'full_name',
            'gender',
            'address',
            'status'
        ]));

        // Redirect dengan pesan sukses
        return redirect()->route('kelas-10.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kelasSepuluhs = KelasSepuluh::findOrFail($id);
        $kelasSepuluhs->delete();

        return redirect()->route('kelas-10.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
