<?php

namespace App\Http\Controllers\Backend\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $videos = Video::latest()->paginate(5);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.gallery.video.video', compact('notifications', 'videos', 'user'));
    }


    public function create()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.gallery.video.craete', compact('notifications', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video_link' => 'required|url',
        ]);

        Video::create([
            'title' => $request->title,
            'video_link' => $request->video_link,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video added successfully');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $video = Video::findOrFail($id);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.gallery.video.edit', compact('notifications', 'video', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video_link' => 'nullable|url',
        ]);

        $video = Video::findOrFail($id);

        $video->update([
            'title' => $request->input('title'),
            'video_link' => $request->input('video_link'),
        ]);

        return redirect()->route('videos.index')->with('success', 'Video berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->route('videos.index')->with('success', 'Video deleted successfully');
    }
}
