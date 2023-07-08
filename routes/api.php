<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;


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

Route::post('/auth', [AuthController::class, 'login']);
Route::get('/sigleAdmin/{id}', [SuperAdminController::class, 'findOneSuperAdmin']);
Route::get('/allSuperAdmin', [SuperAdminController::class, 'getAllSuperAdmins']);


// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Login Route
    Route::get('/logout', [AuthController::class, 'logout']);

    // Admin Route
    Route::post('/createSuperAdmin', [SuperAdminController::class, 'createSuperAdmin']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
