<div class="container mt-4 p-4" style="border-radius: 0.5rem; background: #1E1D27;">
    <form action="<?= url('/formulario') ?>" method="post">
        @csrf
        <label for="name">Nome:</label>
        <input class="form-control" type="text" id="name" name="name" required><br>

        <label for="type">Tipo:</label>
        <input class="form-control" type="text" id="type" name="type" required><br>

        <label for="project_id">ID do Projeto:</label>
        <input class="form-control" type="text" id="project_id" name="project_id" required><br>

        <label for="description">Descrição:</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea><br>

        <label for="time_limit">Prazo de Tempo "Em dias":</label>
        <input class="form-control" type="text" id="time_limit" name="time_limit" required><br>

        <label for="difficulty">Dificuldade:</label>
        <input class="form-control" type="text" id="difficulty" name="difficulty" required><br>

        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </form>
</div>
