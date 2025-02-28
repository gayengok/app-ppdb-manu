<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadPendaftaran extends Model
{
    use HasFactory;


    protected $table = 'uploadpendaftarans';

    protected $fillable = [
        'deskripsi',
        'image_path',
    ];
}
