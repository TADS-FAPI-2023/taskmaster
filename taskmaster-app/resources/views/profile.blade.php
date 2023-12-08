<!DOCTYPE html>
<html lang="pt-br">

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<div class="container">
    <div class="container-card">
        <div class="card-usuario">
            <img src="{{ $User->getImageURL() }}" >
            <p>{{ $userProfile['name'] }}</p>
            <p>{{ $userProfile['email'] }}</p>
            <p>Desenvolvedor Front</p>
            <a href="{{ url('/editProfile/' . auth()->user()->id) }}"><button>Editar perfil</button></a>
        </div>
        <div class="card-informacoes">
            <div class="informacoes-titulo">
                <h2>Biografia</h2>
            </div>
            <div class="informacoes-biografia">
                {{ $userProfile['bio']}}
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

</html>