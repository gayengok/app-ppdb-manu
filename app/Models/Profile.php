<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Nama tabel yang berhubungan dengan model
    protected $table = 'profiles';

    // Kolom yang dapat diisi (Mass Assignable)
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address'
    ];

    // Jika Anda menggunakan timestamps, Laravel akan otomatis menangani created_at dan updated_at
    public $timestamps = true;
}
