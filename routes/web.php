<?php

use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/subject', [\App\Http\Controllers\SubjectController::class, 'index'])->name('subject');
Route::get('/{id}',[SubjectController::class, 'register'])->name('dangky');
Route::get('/class', [\App\Http\Controllers\ClassStudentController::class, 'index'])->name('class');
