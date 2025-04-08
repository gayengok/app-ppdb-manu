<?php

namespace App\Http\Controllers\Backend\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

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
        $imagePath = public_path('backend/assets/img/logo-MA.png');
        $logoBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($imagePath));

        $pdf = PDF::loadView('backend.students.pdf', compact('student', 'logoBase64'));

        return $pdf->download('detail_siswa_' . $student->nama_lengkap . '.pdf');
    }

    public function updateStatus(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->status = $request->status;
        $student->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    }
}
