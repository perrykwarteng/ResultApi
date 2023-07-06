<?php

namespace App\Http\Controllers;

use App\Models\superadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllSuperAdmins()
    {
        //
        $superadmin = superadmin::all();
        return $superadmin;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSuperAdmin(Request $request)
    {
        //
        $fill = $request->validate([
            'first_name' => 'required | string',
            'last_name' => 'required | string',
            'email' => 'required | string',
            'role' => 'required | string'
        ]);

        $start = 'sos';
        $end = 'Superadmin';
        $a_index = $start . $fill['last_name'] . '@' . $end;
        // $password = bcrypt(Str::random(12) . '@Superadmin');
        $password = Str::random(12) . '@Superadmin';
        $role = 'superAdmin';


        $superadmin = new superadmin();
        $superadmin->adminIndex = $a_index;
        $superadmin->first_name = $request->input('first_name');
        $superadmin->other_name = $request->input('other_name');
        $superadmin->last_name = $request->input('last_name');
        $superadmin->password = $password;
        $superadmin->email = $request->input('email');
        $superadmin->role = $role;
        $superadmin->number = $request->input('number');
        $superadmin->location = $request->input('location');
        $superadmin->save();
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
     * @param  \App\Models\superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function showSingleAdmin(superadmin $superadmin)
    {
        //
        superadmin::find();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(superadmin $superadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, superadmin $superadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(superadmin $superadmin)
    {
        //
    }
}
