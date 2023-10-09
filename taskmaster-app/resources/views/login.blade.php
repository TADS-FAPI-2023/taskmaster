<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action=<?= url('/login') ?> method="POST">
        @csrf
        <label for="registration">Matricula:</label>
        <input type="text" id="registration" name="registration">

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Entrar">
    </form>
</body>

</html>
