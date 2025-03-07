<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserSiswa extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'nik', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    protected $table = 'usersiswa';
}
