<!DOCTYPE html>
<form action=<?= url('/formulario' ) ?> method="post">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="description">Descrição:</label>
    <textarea id="description" name="description" rows="3" required></textarea><br>
    <label for="status">Status:</label>
    <input type="text" id="status" name="status" required><br>
    <input type="submit" value="Cadastrar">
</form>

</html>