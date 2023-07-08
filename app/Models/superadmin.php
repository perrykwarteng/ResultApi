<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class superadmin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'adminIndex',
        'first_name',
        'other_name',
        'last_name',
        'password',
        'email',
        'role',
        'number',
        'location',
    ];

    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class);
    // }
}
