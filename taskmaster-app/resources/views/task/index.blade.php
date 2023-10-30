<div class="container mt-4 p-4" style="border-radius: 0.5rem; background: #1E1D27;">
    <a class="btn btn-primary" href="{{ url('/formulario') }}">Cadastrar Projeto</a>
</div>

<div class="container mt-4">
    @foreach ($projects as $key => $project)
        @if ($key % 3 == 0)
            <div class="row">
        @endif
        @if ($project->active == 1) <!-- Verifique se o projeto está ativo-->
            <div class="col-md-4">
                <div class="container-fluid m-2 p-4"
                    style="
                    border-radius: 0.5rem;
                    background: #1E1D27;
                    overflow: hidden;
                    ">
                    <h2>Projeto: {{ $project->name }}</h2>
                    <p>Descrição: <br> {{ $project->description }}</p>
                    <p>Status: {{ $project->status }}</p>
                    <a class="btn btn-primary" href="{{ url('/tarefa/' . $project->id) }}">Ver</a>
                    <a class="btn btn-primary" href="{{ url('/formulario/' . $project->id) }}">Editar</a>                    
                    <form method="POST" action="{{ route('updateActive', ['id' => $project->id]) }}">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-secondary mt-2">Excluir</button>
                    </form>




                </div>
            </div>
        @endif
        @if (($key + 1) % 3 == 0)
            </div>
        @endif
    @endforeach
</div>
