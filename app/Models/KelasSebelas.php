<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSebelas extends Model
{
    use HasFactory;

    protected $table = 'kelasSebelas';

    protected $fillable = [
        'nisn',
        'full_name',
        'gender',
        'address',
        'status',
    ];
}
