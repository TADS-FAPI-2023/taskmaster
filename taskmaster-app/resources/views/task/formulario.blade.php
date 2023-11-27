<div class="container mt-4 p-4" style="border-radius: 0.5rem; background: #1E1D27;  font-family: Inter;">
    <form action="{{ isset($project) ? url('/formulario/' . $project->id) : url('/formulario') }}" method="post">
        @csrf

        @if(isset($project))
            @method('PUT')
        @endif

        @if(isset($project))
            {{ method_field('PUT') }}
        @endif

        <div class="row">
            <div class="col-12 col-md-6">
                <label for="name" class="text-light">Nome:</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ isset($project) ? $project->name : '' }}" required>
            </div>

            <div class="col-12 col-md-6">
                <label for="status" class="text-light">Status:</label>
                <select class="form-control text-dark" id="status" name="status" required>
                    <option value="Finalizar"  class="text-dark" {{ isset($project) && $project->status == 'Finalizar' ? 'selected' : '' }}>Finalizar</option>
                    <option value="Pausar" class="text-dark" {{ isset($project) && $project->status == 'Pausar' ? 'selected' : '' }}>Pausar</option>
                    <option value="Lançar" class="text-dark" {{ isset($project) && $project->status == 'Lançar' ? 'selected' : '' }}>Lançar</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 col-md-6">
                <label for="description" class="text-light">Descrição:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ isset($project) ? $project->description : '' }}</textarea>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <input class="btn btn-primary" type="submit" value="{{ isset($project) ? 'Editar' : 'Cadastrar' }}">
            </div>
        </div>
    </form>
</div>
