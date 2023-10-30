<div class="container mt-4 p-4" style="border-radius: 0.5rem; background: #1E1D27;">
    <form class="" action=<?= url('/formulario') ?> method="post">
        @csrf
        <label for="name">Nome:</label>
        <input class="form-control" type="text" id="name" name="name" required><br>
        <label for="description">Descrição:</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea><br>
        <label for="status">Status:</label>
        <input class="form-control" type="text" id="status" name="status" required><br>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </form>

</div>
