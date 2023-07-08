<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class superadmin extends Model
{
    use HasFactory;

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
