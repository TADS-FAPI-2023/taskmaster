<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{


    public function showTasks($project_id)
    {

        $project = Project::find($project_id);
           //contar tarefas ativas e completas

           $total = Task::where('project_id', $project_id)
           ->where('active', 1)
           ->count();

           $completed = Task::where('project_id', $project_id)
           ->where('active', 1)
           ->where('status', 'completed')->count();

           $percente = 0;

           if($total != 0)
           $percente = $completed / $total * 100;




        if(auth()->user()->role == 1){
          $tasks = Task::where('project_id', $project_id)
            ->where('active', 1)
            ->where('status', '!=', 'evaluate')
            ->get();
            return view('header') . view('task.task', ['project' => $project, 'tasks' => $tasks, 'percente' => $percente]);

         }
        $userId = Auth::user()->id;
        $userTask = Task::where('user_id', $userId)->get();

        if(!$userTask->isEmpty()){
            return view('header') . view('task.task', ['project' => $project, 'tasks' => $userTask,  'percente' => $percente]);
        }

        $tasks = Task::where('project_id', $project_id)
                      ->where('active', 1)
                      ->where('status', 'active')
                      ->get();



        return view('header') . view('task.task', ['project' => $project, 'tasks' => $tasks, 'percente' => $percente]);
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

    public function assignUser(Request $request, $id){


        if(auth()->user()->role == 1){
           return back()->with('error', 'Você não pode se auto atribuir uma tarefa');
        }

        $task = Task::find($id);


        if ($task) {
            $task->user_id = Auth::user()->id; // Defina o campo "user_id" como o id do usuário logado
            $task->start_date = date('Y-m-d H:i:s');             //adicionar data atual
            $task->status = "assingned";
            $task->save();
        }

        return back();
    }

}
