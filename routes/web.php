<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('index');
Route::post('/student-create', [App\Http\Controllers\StudentController::class, 'store'])->name('student.create');
Route::get('/student-all', [App\Http\Controllers\StudentController::class, 'allStudent']);
