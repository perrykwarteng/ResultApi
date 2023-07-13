<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remarks extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentIndex',
        'attendance',
        'outOf',
        'promoted',
        'conduct',
        'attitude',
        'interest',
        'classTeacherRemarks',
        'headTeacherRemarks',
        'date'
    ];
}
