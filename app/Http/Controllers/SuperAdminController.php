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

    // Getting all superAdmin
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

    // Creating a superAdmin
    public function createSuperAdmin(Request $request)
    {

        $fill = $request->validate([
            'first_name' => 'required | string',
            'last_name' => 'required | string',
            'email' => 'required | string',
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

    public function getSuperAdmin(Request $request)
    {
        $superadmin = $request->user();

        return response()->json([
            'superAdmin' => $superadmin
        ]);
    }

    // Getting one superAdmin
    public function findOneSuperAdmin($id)
    {
        $superadmin = superadmin::find($id);
        return response()->json($superadmin);
    }

    // editing a superAdmin
    public function UpdateSuperAdmin($id)
    {
        $superadmin = superadmin::find($id)
            ->filter($id)
            ->update($id);

        return response([
            'message' => 'updated successfully',
            'superadmin' => $superadmin
        ], 200);
    }


    //  Deleting a superAdmin
    public function deleteSuperAdmin($id)
    {
        superadmin::destroy($id);
        return response([
            'message' => 'Admin Deleted Successfully'
        ], 200);
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
     * @param  \App\Models\superadmin  $id
     * @return \Illuminate\Http\Response
     */
    public function showSingleAdmin(superadmin $id)
    {
        //
        // dd(superadmin::find($id));
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
