<div class="container mt-4 p-4" style="border-radius: 0.5rem; background: #1E1D27;">

    <a class="btn btn-primary" href=<?= url('/formulario') ?>>Cadastrar Projeto</a>

</div>

<div class="container mt-4">
    @foreach ($projects as $key => $project)
        @if ($key % 3 == 0)
            <div class="row">
        @endif
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
                <a class="btn btn-primary" href="{{ route('show.tasks', ['project_id' => $project->id]) }}">Ver</a>
                <a class="btn btn-primary" href="{{ url('/formulario/' . $project->id) }}">Editar</a>
            </div>
        </div>
        @if (($key + 1) % 3 == 0)
</div>
@endif
@endforeach
</div>
