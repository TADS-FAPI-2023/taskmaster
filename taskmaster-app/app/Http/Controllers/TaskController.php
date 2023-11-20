<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;

class TaskController extends Controller
{


    public function showTasks($project_id)
    {
        $project = Project::find($project_id);
        // Se você deseja apenas as tarefas do projeto específico e que estejam ativas, pode fazer assim:
        $tasks = Task::where('project_id', $project_id)
                      ->where('active', 1)
                      ->get();
    
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

    public function updateActive($id){
        $task = Task::find($id);
    
        if ($task) {
            $task->active = 0; // Defina o campo "active" como 0 (desativado)
            $task->save();
        }
    
        return back();
    }
    
}

