<?php

namespace App\Http\Controllers\Backend\DataSiswa\KelasSebelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KelasSepuluh;
use App\Models\kelasSebelas;
use App\Models\KelasDuaBelas;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class Kelas11Controller extends Controller
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

        return view('backend.data-siswa.kelas-11.data-kelas-11', compact('kelasSepuluhs', 'kelasSebelas', 'kelasDuaBelas', 'notifications', 'user', 'totalSiswa'));
    }

    public function create()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.data-siswa.kelas-11.create-data-kelas-11', compact('notifications', 'user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn' => 'required|unique:kelasSebelas,nisn',
            'full_name' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|string',
        ]);

        KelasSebelas::create($validated);
        $totalSiswa = KelasSebelas::count();

        return redirect()->route('kelas-11.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kelasSebelas = KelasSebelas::findOrFail($id);
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.data-siswa.kelas-11.edit-data-kelas-11', compact('kelasSebelas', 'user', 'notifications'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'nisn' => 'required|max:10|unique:kelasSebelas,nisn,' . $id,
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'address' => 'required|string|max:255',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $kelasSebelas = KelasSebelas::findOrFail($id);

        $kelasSebelas->update($request->only([
            'nisn',
            'full_name',
            'gender',
            'address',
            'status'
        ]));

        return redirect()->route('kelas-11.index')->with('success', 'Data siswa berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $kelasSebelas = KelasSebelas::findOrFail($id);

        $kelasSebelas->delete();

        return redirect()->route('kelas-11.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
