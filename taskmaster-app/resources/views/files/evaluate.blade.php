@extends('layouts.app')
@section('title', 'Tarefa')
@section('content_header', 'Atualizar Arquivo')
@section('content')
    <h2>Tarefa: {{ $task->name }}</h2>
    <p>Tipo: {{ $task->type }}</p>
    <p>Projeto: {{ $task->project_id }}</p>
    <p>Descrição: <br> {{ $task->description }}</p>
    <p>Prazo de Tempo: {{ $task->time_limit }}</p>
    <p>Dificuldade: {{ $task->difficulty }}</p>
    <p>Arquivo: {{ $file->filename }}</p>
    <div class="form-group col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
        <a class="btn btn-outline-success" href="{{ $file->file_url }}"><i class="fa-solid fa-cloud-arrow-down"></i> Baixar
            arquivo</a><br><br>
    </div>
    <p>Descrição do usuario: <br> {{ $file->description }}</p>
    <form method="POST" action="{{ route('taskEvaluate', $task->id) }}">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-secondary mt-2">Validar</button>
    </form>
    <a class="mt-2 btn btn-info btn-xl" href="javascript:history.back();">Voltar</a><br><br>

@endsection
