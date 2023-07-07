<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\superadmin;
use App\Models\auth;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {


        $fields = $request->validate([
            'index_number' => 'required',
            'password' => 'required'
        ]);



        $superadmin = superadmin::where('adminIndex', $fields['index_number'])
            ->first();
        if ($fields) {
            if (!$superadmin || !$superadmin->password) {

                return [
                    'message' => 'Wrong user'
                ];
            } else {
                $token = $superadmin->createToken('myResultApp')->plainTextToken;

                $response = [
                    'admin' => $superadmin,
                    'token' => $token
                ];

                return response($response, 200);
                // return [
                //     'message' => 'login Successful'
                // ];
            };
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
