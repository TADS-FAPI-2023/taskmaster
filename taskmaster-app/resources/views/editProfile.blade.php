<head>
    <style>
        body {
            background-color: #140920;
        }

        .formulario-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            margin: 80px 50px;
        }

        .campo-bio {
            width: 40%;
            height: 20vh;
            padding: 16px;
            font-size: 18px;
        }

        .formulario-container .formulario {
            background-color: #F7F7F7;
            border-radius: 20px;
            padding: 36px 64px;
            flex: 1;
            box-shadow: 7px 7px 15px rgba(0, 0, 0, 0.08);
        }

        .formulario-container .formulario h2 {
            font-weight: 400;
            font-size: 32px;
        }

        .campo-img {
            display: block;
            margin: 0 0 20px
        }

        .button {
            background-color: #6278f7;
            border-radius: 10px;
            font-weight: 700;
            font-size: 18px;
            padding: 32px;
            border: none;
            cursor: pointer;
            color: #FFF;
            margin: 16px 0;
            transition: transform 0.3s ease-in-out;
        }

        .button:hover {
            background-color: #37286D;
        }

    </style>
</head>

<section class="formulario-container">
    <form class='formulario' enctype="multipart/form-data" action="{{route('users.update',$user['id'])}}" method="POST">
        @csrf
        @method('put')
        <h2>Preencha sua biografia:</h2>
        <textarea type="text" name="bio" id="bio" placeholder="Sua biografia" class="campo-bio"></textarea>
        <h2>Coloque sua fotinha aqui</h2>
        <input type="file" name="image" id="image" class="campo-img">
        <input class="button" type="submit" value="Confirmar edição">
    </form>
</section>