<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;

class TaskController extends Controller
{

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

  public function sendTaskForm(Request $request)
{
    $request->validate([
        'name' => 'required',
        'project_id' => 'required',
        'type' => 'required',
        'description' => 'required',
        'time_limit' => 'required',
        'difficulty' => 'required',
    ]);

    Task::create($request->all());

    return redirect('/tarefa/' . $request->project_id)->with('success', 'Dados registrados com sucesso!');
}

    public function active($id){
        $project = Project::find($id);

        if ($project) {
            $project->active = 0; // Defina o campo "active" como 0 (desativado)
            $project->save();
        }


        return back();
    }
    public function update(Request $request, $id) {

    }


}

