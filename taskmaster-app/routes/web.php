<?php

use App\Http\Controllers\Profile;
use App\Models\project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FileController;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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


Auth::routes();



// so pode acessar as rotas abaixo se estiver logado e for admin
Route::middleware(['auth','isAdmin'])->group(function () {

    #FILES
    Route::get('/teste', [FileController::class, 'index']);
    Route::get('/fileEvaluate/{task}', [FileController::class, 'showTaskEvaluate'])->name('showFileEvaluate');
    #FILES

    #PROJETO
    Route::post('/formulario', [ProjectController::class, 'processarFormulario']);
    Route::get('/formulario', [ProjectController::class, 'exibirFormulario']);
    Route::put('/updateActive/{id}', [ProjectController::class,'active'])->name('updateActive');
    Route::put('/formulario/{id}', [ProjectController::class, 'update']);
    Route::get('/formulario/{id}', [ProjectController::class, 'showFormUpdate']);
    #PROJETO

    #TASK
    Route::post('/sendTaskForm', [TaskController::class, 'sendTaskForm']);
    Route::put('/tasks/{task}', [TaskController::class,'updateActive'])->name('updateActiveTask');
    Route::put('/updateTask/{task}', [TaskController::class, 'updateTask'])->name('updateTask');
    Route::get('/editTaskForm/{task}', [TaskController::class, 'editTaskForm'])->name('editTaskForm');
    Route::get('/showTasksEvaluate/{project}', [TaskController::class, 'showTasksEvaluate']);
    Route::put('/taskEvaluate/{task}', [TaskController::class, 'taskEvaluate'])->name('taskEvaluate');

    #TASK
});

// so pode acessar as rotas abaixo se estiver logado
Route::middleware(['auth'])->group(function () {

    #FILES
    Route::get('files/create/{task}', [FileController::class, 'create'])->name("sendFile");
    Route::post('files/store/{task}', [FileController::class, 'store'])->name("files.store");
    Route::put('files/store/{file}', [FileController::class, 'update'])->name("files.edit");
    #FILES


    #User
    Route::get('/profile/{id}', [Profile::class, 'profile'])->name('profile');
    Route::get('/Users', [userController::class, 'index'])->name('users.index');
    Route::get('/Users/Create', [userController::class, 'create'])->name('users.create');
    Route::post('/Users', [userController::class, 'store'])->name('users.store');
    Route::get('/editProfile/{id}', [Profile::class, 'edit']);
    Route::put('/editProfile/{id}', [Profile::class, 'update'])->name('users.update');
        
    #user

    #RANKING
    Route::get('/ranking', [userController::class, 'index'])->name('users.ranking');
    #ranking

    #PROJETO
    Route::resource('task', ProjectController::class);
    Route::get('/task',[ProjectController::class, 'index']);
    #PROJETO

    #TASK
    Route::get('/tarefa/{project_id}', [TaskController::class, 'showTasks']);
    Route::post('/taskform', [TaskController::class, 'taskForm']);
    Route::put('/tasks/{task}/assign', [TaskController::class, 'assignUser'])->name('assign.user');
    #TASK


    Route::get('/profile', [Profile::class, 'profile']);
    Route::get('/profileEdit', [Profile::class, 'edit_profile']);



});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login' , [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);



Route::get('/', function () {
    return view('header') . view('welcome');
});
