<?php

namespace App\Http\Controllers\Backend\Photo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Photo;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    /**
     * Menampilkan daftar foto.
     */
    public function index()
    {
        $user = Auth::user();
        $photos = Photo::orderBy('created_at', 'desc')->paginate(5);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.gallery.photo.photo', compact('notifications', 'photos', 'user'));
    }

    /**
     * Menampilkan form upload foto.
     */
    public function create()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.gallery.photo.create', compact('notifications', 'user'));
    }

    /**
     * Proses upload foto ke storage dan database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('photos', 'public');

        Photo::create([
            'title' => $request->title,
            'photo_path' => $photoPath,
        ]);

        return redirect()->route('photo.index')->with('success', 'Photo uploaded successfully!');
    }

    /**
     * Menghapus foto dari storage dan database.
     */
    public function destroy($id)
    {

        $photo = Photo::findOrFail($id);

        if (Storage::disk('public')->exists($photo->photo_path)) {
            Storage::disk('public')->delete($photo->photo_path);
        }

        $photo->delete();

        return redirect()->route('photo.index')->with('success', 'Photo deleted successfully!');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $photo = Photo::findOrFail($id);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.gallery.photo.edit', compact('notifications', 'photo', 'user'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photo = Photo::findOrFail($id);

        $photo->title = $request->title;

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($photo->photo_path && Storage::exists('public/' . $photo->photo_path)) {
                Storage::delete('public/' . $photo->photo_path);
            }

            $path = $request->file('photo')->store('photos', 'public');
            $photo->photo_path = $path;
        }

        $photo->save();

        return redirect()->route('photo.index')->with('success', 'Photo updated successfully.');
    }
}
