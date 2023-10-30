<?php

use App\Http\Controllers\Profile;
use App\Models\project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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

    #FILES
    Route::resource('files', FileController::class);
    Route::get('/teste', [FileController::class, 'index']);
    #FILES

    #PROJETO
    Route::resource('task', ProjectController::class);
    Route::get('/task',[ProjectController::class, 'index']);
    Route::get('/profile', [Profile::class, 'profile']);
    Route::get('/formulario', [ProjectController::class, 'exibirFormulario']);
    Route::post('/formulario', [ProjectController::class, 'processarFormulario']);
    #PROJETO

    #TASK
    Route::get('/tarefa/{project_id}', [TaskController::class, 'showTasks']);
    Route::post('/taskform', [TaskController::class, 'taskForm']);
    Route::post('/sendTaskForm', [TaskController::class, 'sendTaskForm']);
    Route::put('/updateActive/{id}', [TaskController::class,'active'])->name('updateActive');
    Route::put('/tarefa/{id}', [TaskController::class,'update'])->name('tarefa.update');
    #TASK


});

Route::get('/', function () {
    return view('header') . view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login' , [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/ranking', function () {


    return view('header') . view('ranking');
});

