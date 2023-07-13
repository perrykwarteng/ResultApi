<?php

namespace App\Http\Controllers;

use App\Models\Remarks;
use Illuminate\Http\Request;

class RemarkController extends Controller
{
    //
    public function getAllRemarks()
    {
        Remarks::get();
    }

    public function createRemarks(Request $request)
    {
        Remarks::create([
            "studentIndex" => $request->studentIndex,
            "attendance" => $request->attendance,
            "outOf" => $request->outOf,
            "promoted" => $request->promoted,
            "conduct" => $request->conduct,
            "attitude" => $request->attitude,
            "interest" => $request->interest,
            "classTeacherRemarks" => $request->classTeacherRemarks,
            "headTeacherRemarks" => $request->headTeacherRemarks,
            "date" => $request->date,
        ]);

        return response()->json([
            'message' => 'Ok'
        ]);
    }

    public function getRemarks($studentIndex)
    {
        $remarks = Remarks::join('students', "students.studentIndex", "remarks.studentIndex")
            ->where('remarks.studentIndex', $studentIndex)
            ->get();
        return $remarks;
    }
}
