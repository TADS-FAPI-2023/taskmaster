<div class="container mt-4 p-4" style="border-radius: 0.5rem; background: #1E1D27;">
    <form class="" action="{{ isset($project) ? url('/formulario/' . $project->id) : url('/formulario') }}" method="post">
        @csrf

        @if(isset($project))
            @method('PUT')
        @endif

        @if(isset($project))
            {{ method_field('PUT') }}
        @endif

        <label for="name">Nome:</label>
        <input class="form-control" type="text" id="name" name="name" value="{{ isset($project) ? $project->name : '' }}" required><br>

        <label for="description">Descrição:</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ isset($project) ? $project->description : '' }}</textarea><br>

        <label for="status">Status:</label>
        <input class="form-control" type="text" id="status" name="status" value="{{ isset($project) ? $project->status : '' }}" required><br>

        <input class="btn btn-primary" type="submit" value="{{ isset($project) ? 'Editar' : 'Cadastrar' }}">
    </form>
</div>
