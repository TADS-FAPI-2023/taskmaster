<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function exibirFormulario()
    {
        return view('header') . view('task');
    }

    public function processarFormulario(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        Project::create($request->all());

        return redirect('/formulario')->with('success', 'Dados registrados com sucesso!');
    }
}