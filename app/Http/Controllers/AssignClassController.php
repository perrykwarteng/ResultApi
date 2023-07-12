<?php

namespace App\Http\Controllers;

use App\Models\AssignClass;
use App\Models\Students;
use Illuminate\Http\Request;

use illuminate\Support\Facades\DB;

class AssignClassController extends Controller
{
    public function AssignClass(Request $request)
    {
        // DB::table("assign_classes")->insert(
        //     []
        // );



        AssignClass::create([
            "teacher" => $request->teacher,
            "classCode" => $request->class,
        ]);
        return response()->json([
            'message' => 'Ok'
        ]);
    }

    public function getClassStudents($teacherIndex)
    {
        $Students = Students::join('assign_classes', "students.class", "assign_classes.classCode")
            ->where('assign_classes.teacher', $teacherIndex)
            ->get();
        return $Students;
    }
}
