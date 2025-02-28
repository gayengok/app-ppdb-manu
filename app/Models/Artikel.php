<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'status',
        'author',
        'short_description',
        'published_date',
    ];

    protected $casts = [
        'published_date' => 'datetime',
    ];
}
