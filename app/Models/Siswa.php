<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{

    protected $table = 'siswa';
    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_lahir', // Tambahkan kolom yang sesuai
    ];

    public $timestamps = true;
}
