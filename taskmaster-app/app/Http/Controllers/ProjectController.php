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

        return redirect('/projects')->with('success', 'Dados registrados com sucesso!');
    }

    public function index()
    {
        $projects = Project::all();
        return view('header') . view('task.index', ['projects' => $projects]);
    }

    public function showTasks($project_id)
    {
        $tasks = Task::where('project_id', $project_id)->get();
        $project = Project::find($project_id);

        return view('header')->view('task.task', ['project' => $project, 'tasks' => $tasks]);
    }
}

