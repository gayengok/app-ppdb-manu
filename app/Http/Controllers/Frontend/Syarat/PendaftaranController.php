<?php

namespace App\Http\Controllers\frontend\Syarat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dokumen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Artikel;

class PendaftaranController extends Controller
{
    public function showForm()
    {
        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();

        return view('frontend.students.syarat-pendaftaran', compact('artikel'));
    }

    // Menyimpan Dokumen
    public function syarat(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kk' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'akta_kelahiran' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'kip_pkh' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'ktp_ortu' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'ijazah_skl' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $dokumens = Dokumen::create([
            'nama' => $request->input('nama'),
            'kk' => $request->file('kk')->store('uploads/documents', 'public'),
            'akta_kelahiran' => $request->file('akta_kelahiran')->store('uploads/documents', 'public'),
            'kip_pkh' => $request->file('kip_pkh') ? $request->file('kip_pkh')->store('uploads/documents', 'public') : null,
            'ktp_ortu' => $request->file('ktp_ortu')->store('uploads/documents', 'public'),
            'ijazah_skl' => $request->file('ijazah_skl')->store('uploads/documents', 'public'),
        ]);

        return redirect()->route('syarat.form')->with('success', 'Dokumen berhasil diunggah.');
    }


    public function showDokumen(Request $request)
    {
        $query = Dokumen::query();
        if ($request->has('search') && !empty($request->input('search'))) {
            $search = $request->input('search');
            $query->where('nama', 'like', '%' . $search . '%');
        }

        $user = Auth::user();
        $dokumens = $query->orderBy('created_at', 'asc')->paginate(5);

        return view('backend.dokumen.dokumen-siswa', compact('dokumens', 'user'))->with('search', $request->search);
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
