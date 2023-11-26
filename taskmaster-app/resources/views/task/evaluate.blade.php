<div class="container mt-4 p-4"
    style="border-radius: 0.5rem; background: #1E1D27; overflow: hidden;
                color: #f4f4f5;
                font-family: Inter;">

    <p>Projeto: {{ $project->name }}</p>
    <p>Descrição: <br> {{ $project->description }}</p>
    <!-- HTML -->


    <a class="btn btn-primary mt-2" href="javascript:history.back();">voltar</a>

</div>

<div class="container mt-4">
    <div class="row">
        @foreach ($tasks as $key => $task)
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

                    <a class="btn btn-primary" href="{{ route('showFileEvaluate', $task->id) }}">Avaliar</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
