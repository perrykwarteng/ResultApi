<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\Teaher;

class AssignSubjects extends Controller
{
    //


    public function assignSubject(Request $request, $teacherIndex)
    {
        $teacher = Teaher::findOrfail($teacherIndex);
        $teacher->subjects()->sync($request->input('subjectId'));

        return response()->json([
            'message' => 'Subjects assigned successfully'
        ]);
    }
}
