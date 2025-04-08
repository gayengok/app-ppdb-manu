<?php

namespace App\Services;

use App\Models\Question;
use App\Models\QuizAttempt;

class QuizScoreService
{
    public function calculateScore(array $userAnswers, string $studentName, ?string $studentId = null)
    {
        // Ambil semua question_id dalam bentuk string (karena di schema question_id adalah string)
        $questionIds = array_keys($userAnswers);

        // Ambil data pertanyaan yang sesuai dengan jawaban user
        $questions = Question::whereIn('question_id', $questionIds)->get();

        $score = 0;
        $totalPossible = 0;
        $categoryScores = [];

        foreach ($questions as $question) {
            $points = intval($question->score_value); // Gunakan score_value dari database
            $totalPossible += $points;
            $category = $question->subject; // Gunakan subject sebagai kategori

            // Pastikan kategori ada di array
            if (!isset($categoryScores[$category])) {
                $categoryScores[$category] = ['earned' => 0, 'total' => 0];
            }

            $categoryScores[$category]['total'] += $points;

            // Konversi question_id ke string agar cocok dengan array userAnswers
            $questionId = (string) $question->question_id;

            // Cek apakah jawaban user benar
            if (isset($userAnswers[$questionId]) && $userAnswers[$questionId] === $question->correct_answer) {
                $score += $points;
                $categoryScores[$category]['earned'] += $points;
            }
        }

        // Pastikan totalPossible tidak nol agar tidak terjadi pembagian dengan nol
        $percentage = ($totalPossible > 0) ? round(($score / $totalPossible) * 100, 2) : 0;

        // Tentukan status lulus (>= 60%)
        $passed = $percentage >= 60;

        // Simpan data percobaan kuis
        $quizAttempt = QuizAttempt::create([
            'student_name' => $studentName,
            'student_id' => $studentId,
            'answers' => json_encode($userAnswers),
            'score' => $score,
            'total_possible' => $totalPossible,
            'percentage' => $percentage,
            'category_scores' => json_encode($categoryScores),
            'passed' => $passed
        ]);

        return $quizAttempt;
    }
}
