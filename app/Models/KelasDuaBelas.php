<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasDuaBelas extends Model
{
    use HasFactory;

    protected $table = 'kelasDuaBelas';


    protected $fillable = [
        'nisn',
        'full_name',
        'gender',
        'address',
        'status',
    ];
}
