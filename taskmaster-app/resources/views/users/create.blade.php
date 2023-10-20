<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
</head>
<body>
    <h1>CREATE</h1>

    <div>
        <form method="post" action="{{url('Users')}}">
            @csrf
            <input type="text" name="name" id="name" placeholder="Seu nome">
            <input type="email" name="email" id="email" placeholder="Seu Email">
            <input type="text" name="cpf" id="cpf" placeholder="Seu Cpf">
            <input type="password" name="password" id="password" placeholder="Sua senha">
            <input type="submit" value="Cadastrar">
        </form>
    </div>


</body>
</html>