<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\superadmin;
use App\Models\Teachers;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {


        $fields = $request->validate([
            'index_number' => 'required',
            'password' => 'required'
        ]);




        if ($fields) {
            if ($superadmin = superadmin::where('adminIndex', $fields['index_number'])->first()) {

                if (!$superadmin || !$superadmin->password) {
                    return [
                        'message' => 'Wrong user'
                    ];
                } else {
                    $token = $superadmin->createToken('')->plainTextToken;

                    $response = [
                        'admin' => $superadmin,
                        'token' => $token
                    ];

                    return response($response, 200);
                }
            } elseif ($teacher = Teachers::where('teacherIndex', $fields['index_number'])->first()) {
                if (!$teacher || !$teacher->password) {
                    return [
                        'message' => 'Wrong user'
                    ];
                } else {
                    $token = $teacher->createToken('myResultApp')->plainTextToken;

                    $response = [
                        'teacher' => $teacher,
                        'token' => $token
                    ];

                    return response($response, 200);
                }
            } elseif ($student = Students::where('studentIndex', $fields['index_number'])->first()) {

                if (!$student || !$student->password) {
                    return [
                        'message' => 'Wrong user'
                    ];
                } else {
                    $token = $student->createToken('myResultApp')->plainTextToken;

                    $response = [
                        'student' => $student,
                        'token' => $token
                    ];

                    return response($response, 200);
                }
            } else {
                return [
                    'message' => 'Wrong user'
                ];
            }
        }
    }

    public function logout(Request $request)
    {
        // $request->tokens()->delete();
        $request->user()->currentAccessToken()->delete();
        return [
            'message' => 'Logged Out Successfuly',
        ];
    }
}
