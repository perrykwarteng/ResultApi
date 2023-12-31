<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Students extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'studentIndex',
        'first_name',
        'other_name',
        'last_name',
        'password',
        'role',
        'class',
        'guidance',
        'guidance_number',
        'location',
    ];
}
