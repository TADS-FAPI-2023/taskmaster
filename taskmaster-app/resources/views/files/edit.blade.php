@extends('layouts.app')
@section('title', 'Tarefa')
@section('content_header', 'Atualizar Arquivo')
@section('content')
    <a class="btn btn-info btn-xl" href="{{ route('files.index') }}">Voltar</a><br><br>
    <form action="{{ route('files.update', $file->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
            <a class="btn btn-outline-success" href="{{ $file->file_url }}"><i class="fa-solid fa-cloud-arrow-down"></i> Baixar
                arquivo</a><br><br>
        </div>
        <div class="form-group col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
            <label for="filename">Arquivo RAR<small> (Apenas um arquivo por vez) *</small></label>
            <input type="file" class="form-control @error('filename') is-invalid @enderror" name="filename">
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
                name="description" placeholder="Digite uma descrição sobre este arquivo">{{ old('description', $file->description) }}</textarea>
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
@endsection
