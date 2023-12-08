<?php

$num = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ranking.css') }}">
</head>

<body>
    <div class="div-titulo" style="border-radius: 0.5rem; background: #1E1D27;">
        <h2>Ranking</h2>
    </div>

    <div class="container mt-4 text-light">
        <ul class="div-geral">
            @foreach ($User as $Users)
            <li class="div-rank">
                <div class="div-inf">
                    <p id="num-rank">{{ $loop->index + 1 }}</p>
                    <p id="nome-rank">{{ $Users->name }}</p>
                </div>
                <div class="div-inf">
                    <div id="div-projeto">
                        <!-- <p id="num-projetos">12</p> -->
                        <p>{{ $Users->task }}</p>
                    </div>
                    <div>
                        <button class="btn-ver"><a href="profile/{{$Users->id}}">Ver mais</a></button>
                    </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>
</body>

</html>