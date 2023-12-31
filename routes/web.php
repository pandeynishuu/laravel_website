<?php

use App\Http\Controllers\frontend\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentController::class,'create']);
Route::post('/student' , [StudentController::class, 'store']);
Route::get('/student' , [StudentController::class, 'index']);
Route::get('/student/{id}' , [StudentController::class, 'edit']);
Route::post('/student/{id}', [StudentController::class, 'update']);
Route::post('/student/{id}', [StudentController::class, 'destroy']);

