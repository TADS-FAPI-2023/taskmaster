        @extends('layouts.app')
        @section('title', 'Tarefa')
        @section('content_header', 'Tarefa')
        @section('content')

            <div class="container mt-4 p-4" style="border-radius: 0.5rem; background: #13111B;">
                <h2>Arquivos</h2>
                <a class="btn btn-primary btn-xl" href="{{ route('files.create') }}"><i class="fa-solid fa-plus"></i> Adicionar
                    projeto</a><br><br>
            </div>
            @if ($files->count() > 0)
                <div class="row">
                    @foreach ($files as $item)
                        <div class="col">
                            <div class="card" style="border-radius: 0.5rem; background: #1E1D27; width: 18rem;">
                                <img src="{{ asset('img/arquivox.png') }}" class="card-img-top mt-1">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->extension }}</h5>
                                    <p class="card-text">{{ $item->description }}</p>
                                    <a href="{{ route('files.edit', $item->id) }}" class="btn btn-warning"> <i
                                            class="fa-solid fa-pen-clip"></i>
                                        Editar Arquivo</a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modal-file-{{ $item->id }}">
                                        <i class="fa-solid fa-ban"></i> Excluir Arquivo
                                    </button>
                                    <div class="modal fade" id="modal-file-{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="label-file-{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="label-file-{{ $item->id }}">Excluir
                                                        Arquivo
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Fechar"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Tem certeza de que deseja excluir este arquivo?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <form action="{{ route('files.destroy', $item->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info" role="alert">
                    Você não possui arquivos, clique em <b>"Adicionar projeto"</b>.
                </div>
            @endif

        @endsection
