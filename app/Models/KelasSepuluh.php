<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSepuluh extends Model
{
    use HasFactory;

    protected $table = 'kelasSepuluhs';

    protected $fillable = [
        'nisn',
        'full_name',
        'gender',
        'address',
        'status'

    ];
}
