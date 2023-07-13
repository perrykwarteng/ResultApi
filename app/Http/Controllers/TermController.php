<?php

namespace App\Http\Controllers;

use App\Models\term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    //
    public function createTerm(Request $request)
    {
        term::create([
            "term" => $request->term,
            "year" => $request->year,
        ]);
        return response()->json([
            'message' => 'Ok'
        ]);
    }

    public function getTerm(){
        term::get();
    }
}
