<?php

namespace App\Http\Controllers\Backend\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;


class GuruController extends Controller
{

    public function index()
    {
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        $user = Auth::user();
        $jumlahGuru = Guru::count();
        $gurus = Guru::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.guru.guru', compact('gurus', 'notifications', 'jumlahGuru', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.guru.create', compact('notifications', 'user'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|unique:gurus,email',
            'jabatan' => 'required|string|max:255',
        ]);

        Guru::create($request->all());

        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $user = Auth::user();
        $guru = Guru::findOrFail($id);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.guru.edit', compact('notifications', 'guru', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|unique:gurus,email,' . $id,
            'jabatan' => 'required|string|max:255',
        ]);

        $guru = Guru::findOrFail($id);
        $guru->update($request->all());

        return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus.');
    }
}
