<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allStudents()
    {
        //
        $students = Students::all();
        return $students;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStudents(Request $request)
    {
        //
        $fill = $request->validate([
            'first_name' => 'required | string',
            'last_name' => 'required | string',
            'guidance' => 'required | string',
        ]);

        $start = 'sos';
        $end = 'student';
        $s_index = $start . $fill['last_name'] . '@' . $end;
        // $password = bcrypt(Str::random(12) . '@Superadmin');
        $password = Str::random(12) . '@' . 'student';
        $role = 'student';


        $student = new Students();
        $student->studentIndex = $s_index;
        $student->first_name = $request->input('first_name');
        $student->other_name = $request->input('other_name');
        $student->last_name = $request->input('last_name');
        $student->password = $password;
        $student->role = $role;
        $student->class = $request->input('class');
        $student->guidance = $request->input('guidance');
        $student->guidance_number = $request->input('guidance_number');
        $student->location = $request->input('location');
        $student->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students)
    {
        //
    }
}
