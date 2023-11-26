<div class="container mt-4 p-4"
    style="border-radius: 0.5rem; background: #1E1D27; overflow: hidden;
                color: #f4f4f5;
                font-family: Inter;">

    <p>Projeto: {{ $project->name }}</p>
    <p>Descrição: <br> {{ $project->description }}</p>
    <!-- HTML -->
    <style>
        .progress-bar {
            width: 100%;
            background-color: #f3f3f3;
            border-radius: 5px;
        }

        .progress {
            height: 20px;
            background-color: #4caf50;
            border-radius: 5px;
        }
    </style>
    <p>Progresso: {{ $percente }}%</p>
    <div class="progress-bar mb-4 ">
        <div class="progress" style="width: {{ $percente }}%"></div>
    </div>

    @if (Auth::user()->role == 1)
        <form action="{{ url('/taskform') }}" method="post">
            @csrf
            <input name="project_id" type="hidden" value="{{ $project->id }}">
            <input type="submit" class="btn btn-primary" value="Cadastrar Tarefa">
        </form>

        <a class="btn btn-primary mt-2" href="{{ url('/taskEvaluate/' . $project->id) }}">avaliar tarefas</a>
    @endif
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
                    @if (Auth::user()->role == 1)
                        <a class="btn btn-primary" href="{{ url('/taskform/' . $task->id) }}">Ver</a>
                        <a class="btn btn-primary" href="{{ url('/taskform/' . $task->id) }}">Editar</a>
                        <form method="POST" action="{{ route('updateActiveTask', $task->id) }}}}">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-secondary mt-2">Excluir</button>
                        </form>
                    @else
                        @if (!Auth::user()->id == $task->user_id)
                            <form method="POST" action="{{ route('assign.user', $task->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-secondary mt-2">Se atribuir</button>
                            </form>
                        @else
                            <a class="btn btn-primary" href="{{ url('/taskform/' . $task->id) }}">Ver</a>
                        @endif
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
