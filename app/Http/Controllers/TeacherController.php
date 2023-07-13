<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allTeachers()
    {
        //
        $teachers = Teachers::all();
        return $teachers;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTeacher(Request $request)
    {
        $fill = $request->validate([
            'first_name' => 'required | string',
            'last_name' => 'required | string',
            'email' => 'required | string',
        ]);

        $start = 'sos';
        $end = 'teacher';
        $t_index = $start . $fill['last_name'] . '@' . $end;
        // $password = bcrypt(Str::random(12) . '@Superadmin');
        $password = Str::random(12) . '@' . 'teacher';



        $teacher = new Teachers();
        $teacher->teacherIndex = $t_index;
        $teacher->first_name = $request->input('first_name');
        $teacher->other_name = $request->input('other_name');
        $teacher->last_name = $request->input('last_name');
        $teacher->password = $password;
        $teacher->email = $request->input('email');
        $teacher->asSubjectTeacher = $request->input('asSubjectTeacher');
        $teacher->asClassTeacher = $request->input('asClassTeacher');
        $teacher->number = $request->input('number');
        $teacher->location = $request->input('location');
        $teacher->save();
    }

    public function getTeacher(Request $request)
    {
        $teacher = $request->user();

        return response()->json([
            'teacher' => $teacher
        ]);
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
     * @param  \App\Models\Teachers  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teachers $teachers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teachers  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teachers $teachers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teachers $teachers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teachers $id)
    {
        //
        Teachers::destroy($id);
    }
}
