<div class="container mt-4 p-4" style="border-radius: 0.5rem; background: #1E1D27;">

    <form action="{{ isset($task_id) ? route('updateTask', $task_id) : url('/sendTaskForm') }}" method="post" style=" ">
        @csrf

        <!-- Utilize o método PUT para atualização -->
        @if(isset($task_id))
            @method('PUT')
        @endif

        <input name="project_id" hidden value="{{ $project_id }}">
        <input name="task_id" type="hidden" value="{{ $task_id ?? '' }}">

        <label for="name">Nome:</label>
        <input class="form-control" type="text" id="name" name="name" value="{{ $task_name ?? '' }}" required><br>

        <label for="type">Tipo:</label>
        <input class="form-control" type="text" id="type" name="type" value="{{ $task_type ?? '' }}" required><br>

        <label for="description">Descrição:</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $task_description ?? '' }}</textarea><br>

        <label for="time_limit">Prazo de Tempo "Em dias":</label>
        <input class="form-control" type="date" id="time_limit" name="time_limit" value="{{ $task_time_limit ?? '' }}" required><br>

        <label for="difficulty">Dificuldade:</label>
        <input class="form-control" type="text" id="difficulty" name="difficulty" value="{{ $task_difficulty ?? '' }}" required><br>

        <input class="btn btn-primary" type="submit" value="{{ isset($task_id) ? 'Atualizar' : 'Cadastrar' }}">
    </form>
</div>
