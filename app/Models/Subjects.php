<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;

    protected $fillable = [
        'subjectId',
        'subject_name'
    ];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
}
