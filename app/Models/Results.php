<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentIndex',
        'subjectCode',
        'class_score',
        'exam_score',
        'total_score',
        'grade'
    ];
}
