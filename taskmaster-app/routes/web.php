<?php

use App\Http\Controllers\Profile;
use App\Models\project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TasksController;

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


Auth::routes();



// so pode acessar as rotas abaixo se estiver logado 
Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('header') . view('welcome');
    });
    
    Route::get('/ranking', function () {


        return view('header') . view('ranking');
    });
    
    Route::get('/task', function () {

        $projects = project::all();

        return view('header') . view('task' , ['projects' => $projects]);
    });
    
    
    Route::resource('files', FileController::class);
    Route::get('/teste', [FileController::class, 'index']);
    
    

    Route::get('/profile', [Profile::class, 'profile']);
    
    Route::get('/formulario', [TasksController::class, 'exibirFormulario']);
    Route::post('/formulario', [TasksController::class, 'processarFormulario']);
    

});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login' , [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);