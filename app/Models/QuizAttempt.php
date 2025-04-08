<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAttempt extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'student_id',
        'answers',
        'score',
        'total_possible',
        'percentage',
        'category_scores',
        'passed'
    ];

    protected $casts = [
        'answers' => 'array',
        'category_scores' => 'array',
    ];
}
