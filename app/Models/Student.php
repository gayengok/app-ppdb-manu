<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Menentukan kolom yang boleh diisi secara massal
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'kabupaten',
        'email',
        'no_hp',
        'sekolah_asal',
        'nama_ayah',
        'nama_ibu',
        'no_hp_ortu'
    ];
}
