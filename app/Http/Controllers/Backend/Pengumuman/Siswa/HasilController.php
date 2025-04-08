<?php

namespace App\Http\Controllers\Backend\Pengumuman\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\QuizAttempt;

class HasilController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        $attempts = QuizAttempt::orderBy('created_at', 'desc')->paginate(20);
        return view('backend.pengumuman.hasil_test.hasil_test', compact('notifications', 'attempts', 'user'));
    }

    public function updateStatus(Request $request, $id)
    {
        $attempt = QuizAttempt::findOrFail($id);
        $attempt->status = $request->status;
        $attempt->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui!');
    }
}
