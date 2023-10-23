<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Task;

class ProjectController extends Controller
{
    public function exibirFormulario()
    {
        return view('header') . view('task.formulario');
    }

    public function processarFormulario(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        Project::create($request->all());

        return redirect('/task')->with('success', 'Dados registrados com sucesso!');
    }

    public function index()
    {
        $projects = Project::all();
        return view('header') . view('task.index', ['projects' => $projects]);
    }

    public function showTasks($project_id)
    {

        $project = Project::find($project_id);
        $tasks = Task::where('project_id', $project_id)->get();

        return view('header') . view('task.task', ['project' => $project, 'tasks' => $tasks]);


    }

    public function taskForm(Request $request){

        $request->validate([
            'project_id' => 'required',
        ]);
        // dd($request);
        return view('header'). view('task.taskform', ['project_id' => $request->project_id]);

    }

    public function sendTaskForm(Request $request){
        // dd($request);
       $request->validate([
            'name' => 'required',
            'project_id' => 'required',
            'type' => 'required',
            'description' => 'required',
            'time_limit' => 'required',
            'difficulty' => 'required',
        ]);

        Task::create($request->all());



      return redirect('/tarefa/'. $request->project_id)->with('success', 'Dados registrados com sucesso!');

    }
}

