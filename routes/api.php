<?php

use App\Http\Controllers\AssignSubjects;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Public Route
Route::post('/auth', [AuthController::class, 'login']);

Route::post('/assignSubject/{TeacherIndex}/assign', [AssignSubjects::class, 'assignSubject']);

Route::post('/createStudents', [StudentsController::class, 'createStudents']);


// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Login Routes
    Route::get('/logout', [AuthController::class, 'logout']);

    // Admin Routes
    Route::get('/sigleAdmin/{id}', [SuperAdminController::class, 'findOneSuperAdmin']);
    Route::get('/allSuperAdmin', [SuperAdminController::class, 'getAllSuperAdmins']);
    Route::post('/createSuperAdmin', [SuperAdminController::class, 'createSuperAdmin']);


    // Teachers Routes
    Route::get('/allTeachers', [TeacherController::class, 'allTeachers']);
    Route::post('/createTeachers', [TeacherController::class, 'createTeacher']);

    // Students Routes
    Route::get('/getAllStudents', [StudentsController::class, 'allStudents']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
