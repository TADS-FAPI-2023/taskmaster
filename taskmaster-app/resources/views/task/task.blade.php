<div class="container mt-4 p-4" style="border-radius: 0.5rem; background: #1E1D27;">
    <form  action=<?= url('/taskform') ?> method="post">
        @csrf
        <input name="project_id" type="hidden" value="<?= $project->id ?>">
        <input type="submit" class="btn btn-primary" value="Cadastrar Tarefa">
    </form>
</div>

<div class="container mt-4">
    @foreach ($tasks as $key => $task)
        @if ($key % 3 == 0)
            <div class="row">
        @endif
        <div class="col-md-4">
            <div class="container-fluid m-2 p-4"
                style="
                border-radius: 0.5rem;
                background: #1E1D27;
                overflow: hidden;
                color: #f4f4f5;
        font-family: Inter;
        font-size: 1rem;
        font-style: normal;
        font-weight: 400;
        line-height: 160%;
                ">
                <h2>Tarefa: {{ $task->name }}</h2>
                <p>Tipo: {{ $task->type }}</p>
                <p>Projeto: {{ $task->project_id }}</p>
                <p>Descrição: <br> {{ $task->description }}</p>
                <p>Prazo de Tempo: {{ $task->time_limit }}</p>
                <p>Dificuldade: {{ $task->difficulty }}</p>
                {{-- <a class="btn btn-primary" href="{{ url('/tarefa/' . $task->id) }}">Ver</a> --}}
                <a class="btn btn-primary" href="{{ url('/taskform/' . $task->id) }}">Editar</a>
</form>

            </div>
        </div>
        @if (($key + 1) % 3 == 0)
    </div>
    @endif
    @endforeach
</div>
