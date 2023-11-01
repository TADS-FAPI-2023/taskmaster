<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
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
        $projects = Project::all()->where('active', 1);
        return view('header') . view('task.index', ['projects' => $projects]);
    }

    public function active($id){
        $project = Project::find($id);

        if ($project) {
            $project->active = 0; // Defina o campo "active" como 0 (desativado)
            $project->save();
        }


        return back();
    }
    // public function update(Request $request, $id) {

    // }

}

