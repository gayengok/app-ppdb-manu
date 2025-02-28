<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Authenticatable
{
    use HasFactory, Notifiable, CanResetPassword;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    // This should point to 'users' table, not 'password_reset_tokens'.
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_image',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
