@extends('layouts.app')
@section('title', 'Tarefa')
@section('content_header', 'Tarefa')
@section('content')

    <form action="{{ route('files.store',$task->id) }}" method="post" enctype="multipart/form-data" style=" color: #f4f4f5;
                font-family: Inter;
                font-size: 1rem;
                font-style: normal;
                font-weight: 400;
                line-height: 160%;">
        @csrf
        <h2>Tarefa: {{ $task->name }}</h2>
        <p>Tipo: {{ $task->type }}</p>
        <p>Projeto: {{ $task->project_id }}</p>
        <p>Descrição: <br> {{ $task->description }}</p>
        <p>Prazo de Tempo: {{ $task->time_limit }}</p>
        <p>Dificuldade: {{ $task->difficulty }}</p>
        <div class="form-group col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
            <label for="filename">Arquivo RAR<small> (Apenas um arquivo por vez) *</small></label>
            <input type="file" class="form-control @error('filename') is-invalid @enderror" name="filename" accept=".rar">
            @if ($errors->has('filename'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('filename') }}</strong>
                </span>
            @endif
        </div>
        <br>
        <div class="form-group col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
            <label for="description">Descrição *</label>
            <textarea type="description" rows="4" class="form-control @error('description') is-invalid @enderror"
                name="description" placeholder="Digite uma descrição sobre este arquivo">{{ old('description') }}</textarea>
            @if ($errors->has('description'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <br>
            <button class="btn btn-primary btn-xl"><i class="fa-solid fa-share"></i> Enviar</button>
        </div>
    </form>
    <a class="btn btn-info btn-xl" href="{{ url('/tarefa/'.$task->project_id) }}">Voltar</a><br><br>
@endsection
