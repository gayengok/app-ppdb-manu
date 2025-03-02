<?php

namespace App\Http\Controllers\Backend\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use App\Models\Artikel;

class StudentController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        $artikel = Artikel::where('status', 'Published')
            ->orderBy('published_date', 'desc')
            ->first();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.students.create', compact('user', 'notifications', 'artikel'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'kabupaten' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email',
            'no_hp' => 'required|string|max:15',
            'sekolah_asal' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'no_hp_ortu' => 'required|string|max:15',
        ]);

        $studentData = $request->except('_token');
        $student = Student::create($studentData);

        Notification::create([
            'message' => '📋 Data pendaftaran ' . $student->nama_lengkap . ' telah masuk. Segera periksa untuk verifikasi!',
            'is_read' => false,
        ]);

        return redirect()->route('students.create')->with('success', 'Pendaftaran berhasil disimpan.');
    }




    public function index(Request $request)
    {
        $query = Student::query();

        if ($request->has('search') && $request->search) {
            $search = $request->input('search');
            $query->where('nama_lengkap', 'like', "%$search%")
                ->orWhere('nama_panggilan', 'like', "%$search%");
        }

        $user = Auth::user();
        $students = $query->orderBy('created_at', 'desc')->paginate(10);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.students.siswa-baru', compact('students', 'notifications', 'user'))->with('search', $request->search);
    }


    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('admin.students.index')->with('success', 'Data siswa berhasil dihapus.');
    }

    public function show($id)
    {
        $user = Auth::user();
        $student = Student::findOrFail($id);
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('backend.students.show', compact('student', 'notifications', 'user'));
    }

    public function downloadPdf($id)
    {
        $student = Student::findOrFail($id);

        $pdf = PDF::loadView('backend.students.pdf', compact('student'));

        return $pdf->download('detail_siswa_' . $student->nama_lengkap . '.pdf');
    }



    // public function showResults()
    // {
    //     $students = Student::all();
    //     return view('backend.students.hasil-seleksi', compact('students'));
    // }
}
