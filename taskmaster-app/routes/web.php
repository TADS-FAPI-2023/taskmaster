<?php

use App\Http\Controllers\Profile;
use App\Models\project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProjectController;

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


    Route::get('/ranking', function () {


        return view('header') . view('ranking');
    });
    Route::resource('task', ProjectController::class);
    Route::get('/task',[ProjectController::class, 'index']);

    Route::resource('files', FileController::class);
    Route::get('/teste', [FileController::class, 'index']);


    Route::get('/profile', [Profile::class, 'profile']);

    Route::get('/formulario', [ProjectController::class, 'exibirFormulario']);
    Route::post('/formulario', [ProjectController::class, 'processarFormulario']);

    Route::get('/tarefa/{project_id}', [ProjectController::class, 'showTasks']);
    Route::post('/taskform', [ProjectController::class, 'taskForm']);
    Route::post('/sendTaskForm', [ProjectController::class, 'sendTaskForm']);

    Route::put('/updateActive/{id}', [ProjectController::class,'active'])->name('updateActive');
    Route::put('/tarefa/{id}', [ProjectController::class,'update'])->name('tarefa.update');

});

Route::get('/', function () {
    return view('header') . view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login' , [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
