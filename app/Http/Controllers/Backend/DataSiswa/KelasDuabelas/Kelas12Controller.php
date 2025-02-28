<?php

namespace App\Http\Controllers\Backend\DataSiswa\KelasDuabelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KelasSepuluh;
use App\Models\kelasSebelas;
use App\Models\KelasDuaBelas;
use Illuminate\Support\Facades\Auth;

class Kelas12Controller extends Controller
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


        return view('backend.data-siswa.kelas-12.data-kelas-12', compact('kelasSepuluhs', 'kelasDuaBelas', 'user', 'totalSiswa'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('backend.data-siswa.kelas-12.create-data-kelas-12', compact('user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn' => 'required|unique:kelasDuaBelas,nisn|max:10',
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'address' => 'required|string|max:255',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        KelasDuaBelas::create($validated);

        $totalSiswa = KelasDuaBelas::count();

        return redirect()->route('kelas-12.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kelasDuaBelas = KelasDuaBelas::findOrFail($id);
        $user = Auth::user();
        return view('backend.data-siswa.kelas-12.edit-data-kelas-12', compact('kelasDuaBelas', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required|max:10|unique:kelasDuaBelas,nisn,' . $id,
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'address' => 'required|string|max:255',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $kelasDuaBelas = KelasDuaBelas::findOrFail($id);

        $kelasDuaBelas->update($request->only([
            'nisn',
            'full_name',
            'gender',
            'address',
            'status',
        ]));

        return redirect()->route('kelas-12.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kelasDuaBelas = KelasDuaBelas::findOrFail($id);

        $kelasDuaBelas->delete();

        return redirect()->route('kelas-12.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
