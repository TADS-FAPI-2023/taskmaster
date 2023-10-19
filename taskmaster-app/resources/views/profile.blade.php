<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
</head>
<body>
    <header class="header">
        <div class="header-titulo">
            <img src="./img/Frame.svg">
        </div>
        <div class="header-perfil">
            <img src="./img/fotinha.jpg" alt="foto perfil" id="foto-perfil">
            <p id="nome-usuario">Lucas</p>
            <img src="./img/seta-para-baixo.png" id="button-menu">
            <div id="menu-dropdown">
                <ul>
                    <li><img src="./img/home.png" class="icons"><a href="http://localhost/taskmaster/taskmaster-app/public/">Home</a></li>
                    <li><img src="./img/config.png" class="icons"><a href="#">Configurações</a></li>
                    <li><img src="./img/interrogacao.png" class="icons"><a href="#">Ajuda</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="container-card">
            <div class="card-usuario">
                <img src="./img/avatar.jpg" class="img-card">
                <p>Lucas Chang</p>
                <p>28/07/2004</p>
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
                    <img src="./img/bronzeMedal.jpg" class="medalha-img">
                    <img src="./img/bronzeMedal.jpg" class="medalha-img">
                    <img src="./img/bronzeMedal.jpg" class="medalha-img">
                    <p id="more-medal">+5</p>
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



    <script>
        const buttonIcon = document.getElementById('button-menu');
        const menuDropdown = document.getElementById('menu-dropdown');

        buttonIcon.addEventListener('click', () => {
            menuDropdown.classList.toggle('active');
            menuDropdown.classList == 'active' ? 'block' : 'none';
            buttonIcon.style.transform = menuDropdown.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)';
        });
    </script>
</body>
</html>