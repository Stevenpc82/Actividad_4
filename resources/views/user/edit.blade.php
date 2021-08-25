<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Editar datos de usuario</title>
</head>
<body>
{{--Navbar--}}
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid" >
        <a class="navbar-brand col text-center" href="{{route('user.index')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                 class="bi bi-check-square" viewBox="0 0 16 16">
                <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path
                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/>
            </svg>
            Actializar datos
        </a>
    </div>
</nav>

{{--Formulario de edicion de datos--}}
<div class="container">
    <div class="bg-light p-5 rounded ">
        <form action="{{route('user.update', $user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="">Apellidos</label>
                <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}">
            </div>
            <div class="form-group">
                <label for="">Correo</label>
                <input type="text" class="form-control" name="email" value="{{$user->email}}">
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group col text-center">
                        <button class="btn btn-primary">Guardar cambios</button>
                        <a href="{{route('user.index')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
</body>
</html>
