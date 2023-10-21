<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class TasksController extends Controller
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

    public function index(){
        $projects = project::all();
        return view('header') . view('task.index' , ['projects' => $projects]);
    }
}
