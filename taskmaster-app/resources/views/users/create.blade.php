<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/userCss/create.css') }}" />
    <title>CREATE</title>
</head>
<body>
    <h1>CREATE</h1>

    <div>

        
        @if(isset($errors) && count($errors)>0)
            <div>
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif
       

        <form method="post" action="{{url('Users')}}">
            @csrf
            <input type="text" name="name" id="name" placeholder="Seu nome" required>
            <input type="email" name="email" id="email" placeholder="Seu Email" required>
            <input type="text" name="cpf" id="cpf" placeholder="Seu Cpf" required>
            <input type="password" name="password" id="password" placeholder="Sua senha" required>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confime sua senha" required>
            <input type="submit" value="Cadastrar">
        </form>
    </div>


</body>
</html>