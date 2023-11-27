<div class="container mt-4 p-4" style="border-radius: 0.5rem; background: #1E1D27; ">

    <form action="{{ isset($task_id) ? route('updateTask', $task_id) : url('/sendTaskForm') }}" method="post">
        @csrf

        <!-- Utilize o método PUT para atualização -->
        @if (isset($task_id))
            @method('PUT')
        @endif

        <input name="project_id" type="hidden" value="{{ $project_id }}">
        <input name="task_id" type="hidden" value="{{ $task_id ?? '' }}">

        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <label for="name" class="form-label text-light">Nome:</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ $task_name ?? '' }}"
                    required>
            </div>

            <div class="col-12 col-md-6">
                <label for="type" class="form-label text-light">Tipo:</label>
                <input class="form-control" type="text" id="type" name="type" value="{{ $task_type ?? '' }}"
                    required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label for="description" class="form-label text-light">Descrição:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $task_description ?? '' }}</textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <label for="time_limit" class="form-label text-light">Prazo de Tempo "Em dias":</label>
                <input class="form-control" type="date" id="time_limit" name="time_limit"
                    value="{{ $task_time_limit ?? '' }}" min="{{ date('Y-m-d') }}" required>
            </div>

            <div class="col-12 col-md-6">
                <label for="difficulty" class="form-label text-light">Dificuldade:</label>
                <select class="form-control text-dark" id="difficulty" name="difficulty" required>
                    <option value="Facil" class="text-dark"
                        {{ isset($task_difficulty) && $task_difficulty == 'Facil' ? 'selected' : '' }}>Fácil</option>
                    <option value="Medio" class="text-dark"
                        {{ isset($task_difficulty) && $task_difficulty == 'Medio' ? 'selected' : '' }}>Médio</option>
                    <option value="Dificil" class="text-dark"
                        {{ isset($task_difficulty) && $task_difficulty == 'Dificil' ? 'selected' : '' }}>Difícil
                    </option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary"
                    type="submit">{{ isset($task_id) ? 'Atualizar' : 'Cadastrar' }}</button>
            </div>
        </div>
    </form>
</div>
