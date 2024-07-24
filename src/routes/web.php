<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RestController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('verified')->group(function () {
    Route::get('/', [AttendanceController::class, 'index']);
    Route::get('/attendance', [AttendanceController::class, 'findByDate']);
    Route::post('/attendances/create', [AttendanceController::class, 'store']);
    Route::patch('/attendances/update', [AttendanceController::class, 'update']);
    Route::post('/rests/create', [RestController::class, 'store']);
    Route::patch('/rests/update', [RestController::class, 'update']);
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/attendance', [AttendanceController::class, 'findByUser']);
});
