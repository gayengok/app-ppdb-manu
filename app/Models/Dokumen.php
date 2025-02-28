<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'dokumen';

    protected $fillable = [
        'nama',
        'kk',
        'akta_kelahiran',
        'kip_pkh',
        'ktp_ortu',
        'ijazah_skl',
    ];
}
