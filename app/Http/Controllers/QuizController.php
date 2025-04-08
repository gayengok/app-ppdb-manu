<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuizAttempt;
use App\Services\QuizScoreService;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\CalonSiswa;

class QuizController extends Controller
{
    protected $quizScoreService;

    public function __construct(QuizScoreService $quizScoreService)
    {
        $this->quizScoreService = $quizScoreService;
    }

    public function index()
    {
        $loggedInStudent = Auth::guard('calonsiswa')->user();

        if (!$loggedInStudent) {
            return redirect()->route('login_siswa')->with('error', 'Silakan login terlebih dahulu.');
        }

        $questions = Question::orderBy('created_at', 'desc')->get();

        return view('backend.admin.pendaftaran.test_ppdb.test-soal', compact('questions', 'loggedInStudent'));
    }

    public function submit(Request $request)
    {

        $validator = validator($request->all(), [
            'student_name' => 'required|string|max:255',
            'student_id' => 'nullable|string|max:255',
        ]);

        if ($validator->fails() && !$request->has('time_expired')) {
            return back()->withErrors($validator)->withInput();
        } elseif ($validator->fails() && $request->has('time_expired')) {
            if (empty($request->student_name)) {
                $request->merge(['student_name' => 'Peserta Tanpa Nama']);
            }
        }

        $answers = $request->except(['_token', 'student_name', 'student_id', 'time_expired']);

        if (!is_array($answers)) {
            return back()->withErrors(['error' => 'Format jawaban tidak valid.'])->withInput();
        }

        $allQuestions = Question::pluck('id')->toArray();
        if ($request->has('time_expired')) {
            foreach ($allQuestions as $qId) {
                if (!isset($answers[$qId])) {
                    $answers[$qId] = 'a';
                }
            }
        }

        // Hitung skor
        $result = $this->quizScoreService->calculateScore(
            $answers,
            $request->student_name,
            $request->student_id
        );

        // Jika waktu habis, tambahkan catatan
        if ($request->has('time_expired')) {
            $result->notes = 'Waktu ujian habis, form disubmit otomatis.';
            $result->save();
        }



        return redirect()->route('petunjuk.index', $result->id);
    }


    public function result(QuizAttempt $quizAttempt)
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->latest()
            ->get();

        $quizAttempt->category_scores = is_string($quizAttempt->category_scores)
            ? json_decode($quizAttempt->category_scores, true)
            : $quizAttempt->category_scores;

        return view('backend.sekor.result', compact('notifications', 'user', 'quizAttempt'));
    }

    public function admin()
    {
        $user = Auth::user();
        $notifications = Notification::where('is_read', false)
            ->latest()
            ->get();
        $attempts = QuizAttempt::latest()->paginate(20);


        return view('backend.sekor.scores', compact('notifications', 'attempts', 'user'));
    }

    public function destroy($id)
    {
        $attempt = QuizAttempt::findOrFail($id);
        $attempt->delete();

        return redirect()->route('quiz.admin')->with('success', 'Data berhasil dihapus.');
    }
}
