<?php

namespace App\Http\Controllers;

use App\Models\Results;
use Illuminate\Http\Request;

class ResultsController extends Controller
{

    //
    public function createResult(Request $request)
    {
        // $fill = $request->validate([
        //     'studentIndex' => 'required ',
        //     'subjectCode' => 'required ',
        //     'class_score' => 'required ',
        //     'exam_score' => 'required ',

        // ]);
        $half = 2;
        // $class_score = $fill . ['class_score'];
        // $exam_score = $fill . ['exam_score'];

        $total_score =

            $results = new Results();
        $results->studentIndex =  $request->input('studentIndex');
        $results->subjectCode =  $request->input('subjectCode');
        $results->class_score = $request->input('class_score') / $half;
        $results->exam_score = $request->input('exam_score') / $half;
        echo ($results->total_score = $results->class_score + $results->exam_score);

        if ($results->total_score = 80 || $results->total_score >= 100) {
            $results->grade = 'A';
        } elseif ($results->total_score = 75 || $results->total_score >= 79) {
            $results->grade = 'P';
        } elseif ($results->total_score = 70 || $results->total_score >= 74) {
            $results->grade = 'AP';
        } elseif ($results->total_score = 65 || $results->total_score  >= 69) {
            $results->grade = 'D';
        } elseif ($results->total_score <= 64) {
            $results->grade = 'B';
        } else {
            ['message' => 'error'];
        }

        $results->save();

        // Results::create([
        //     "studentIndex" => $request->studentIndex,
        //     "subjectCode" => $request->subjectCode,
        //     "class_score" => $request->class_score,
        //     "exam_score" => $request->exam_score,
        //     "total_score" => $request->total_score,
        //     "grade" => $request->attitude,

        // ]);



        return response()->json([
            'message' => 'Succsess'
        ]);
    }
}
