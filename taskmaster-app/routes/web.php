<?php

use App\Http\Controllers\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\userController;

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

Route::get('/ranking', function () {
    return view('header') . view('ranking');
});

Route::get('/task', function () {
    return view('header') . view('task');
});



Route::resource('files', FileController::class);
Route::get('/teste', [FileController::class, 'index']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/profile', [Profile::class, 'profile']);

Route::get('/Users', [userController::class, 'index'])->name('users.index');
Route::get('/Users/Create', [userController::class, 'create'])->name('users.create');
Route::post('/Users', [userController::class, 'store'])->name('users.store');
