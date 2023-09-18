<?php

use App\Http\Controllers\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('header') . view('welcome');
});

Route::get('/task', function () {
    return view('header') . view('task');
});

Route::get('/ranking', function () {
    return view('header') . view('ranking');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/profile', [Profile::class, 'profile']);