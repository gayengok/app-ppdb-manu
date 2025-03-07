<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nik',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
