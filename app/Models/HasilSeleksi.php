<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilSeleksi extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'hasil_seleksis';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = ['nama_lengkap', 'status'];
}
