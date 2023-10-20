<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ</title>
</head>

<body>
    <h1>CRUD</h1>


    <div>
        <a href="{{url('Users/Create')}}">
            <button>Cadastrar</button>
        </a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CPF</th>
                <th scope="col">PASSWORD</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($User as $Users)
                <tr>
                    <th scope="row">{{$Users->id}}</th>
                    <td>{{$Users->name}}</td>
                    <td>{{$Users->email}}</td>
                    <td>{{$Users->cpf}}</td>
                    <td>{{$Users->password}}</td>
                    <td>
                        <a href="#">
                            <button>Edit</button>
                        </a>
                        <a href="#">
                            <button>Delete</button>
                        </a>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</body>

</html>