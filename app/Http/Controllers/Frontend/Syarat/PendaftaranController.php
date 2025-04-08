<?php

namespace App\Http\Controllers\frontend\Syarat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Artikel;

class PendaftaranController extends Controller
{
    public function showDokumen(Request $request)
    {
        $query = Dokumen::query();
        if ($request->has('search') && !empty($request->input('search'))) {
            $search = $request->input('search');
            $query->where('nama', 'like', '%' . $search . '%');
        }

        $user = Auth::user();
        $dokumens = $query->orderBy('created_at', 'asc')->paginate(10);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.dokumen.dokumen-siswa', compact('dokumens', 'notifications', 'user'))->with('search', $request->search);
    }

    public function download($filename)
    {
        $path = storage_path("app/public/uploads/documents/" . $filename);

        if (file_exists($path)) {
            return response()->download($path);
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }
    }

    // Menghapus dokumen
    public function destroy($id)
    {
        $dokumen = Dokumen::findOrFail($id);

        // Hapus file dari storage
        if ($dokumen->kk) Storage::disk('public')->delete($dokumen->kk);
        if ($dokumen->akta_kelahiran) Storage::disk('public')->delete($dokumen->akta_kelahiran);
        if ($dokumen->kip_pkh) Storage::disk('public')->delete($dokumen->kip_pkh);
        if ($dokumen->ktp_ortu) Storage::disk('public')->delete($dokumen->ktp_ortu);
        if ($dokumen->ijazah_skl) Storage::disk('public')->delete($dokumen->ijazah_skl);

        $dokumen->delete();

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil dihapus.');
    }
}
