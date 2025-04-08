<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class PengaturanController extends Controller
{
    public function showSettings()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        $setting = Setting::first();
        return view('backend.pengaturan.settings', compact('notifications', 'user', 'setting'));
    }

    public function updateStatus(Request $request)
    {
        $status = $request->input('quiz_status') == 'on' ? true : false;

        Setting::first()->update(['quiz_status' => $status]);

        return redirect()->back()->with('success', 'Status tombol berhasil diperbarui!');
    }
}
