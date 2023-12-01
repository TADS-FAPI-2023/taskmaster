<?php 



?>

<!DOCTYPE html>
<html lang="pt-br">

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<div class="container">
    <div class="container-card">
        <div class="card-usuario">
            <img src="./img/avatar.jpg" class="img-card">
            <p>{{ $userProfile['name'] }}</p>
            <p>{{ $userProfile['email'] }}</p>
            <p>Desenvolvedor Front</p>
        </div>
        <div class="card-informacoes">
            <div class="informacoes-titulo">
                <h2>Biografia</h2>
            </div>
            <div class="informacoes-biografia">
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat."
            </div>
            <div class="informacoes-medal">
            </div>
        </div>
    </div>
</div>
<div class="container-informacoes">
    <div class="box-informacoes">
        <img src="./img/rank.png" class="img-informacoes">
        <h3>9º</h3>
        <p>Lugar no ranking geral</p>
    </div>
    <div class="box-informacoes">
        <img src="./img/pontos.png" class="img-informacoes">
        <h3>122.00</h3>
        <p>Pontos acumulados</p>
    </div>
    <div class="box-informacoes">
        <img src="./img/projeto.png" class="img-informacoes">
        <h3>83</h3>
        <p>Projetos concluidos</p>
    </div>
</div>
    <p></p>
    <p>exibindo id: {{ $id }}</p>
</html>