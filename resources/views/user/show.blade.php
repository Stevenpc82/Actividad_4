<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

{{--Nadvar--}}
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1"><h2>Detalles usuario</h2></span>
    </div>
</nav>
<br>
{{--Detalles del Usuario--}}
<main class="container">
    <div class="bg-light p-5 rounded">
        <table class="table">
            <tr>
                <td><h3>Nombre:</h3></td>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <td><h4>Apellido:</h4></td>
                <td>{{$user->lastname}}</td>
            </tr>
            <tr>
                <td><h4>Correo:</h4></td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td><h4>Contacto:</h4></td>
                <td>{{$user->phone}}</td>
            </tr>
            <tr>
                <td><h4>Tu id</h4></td>
                <td>{{$user->id}}</td>
            </tr>
        </table>
        <a class="btn btn-lg btn-primary" href="{{route('user.index')}}" role="button">Volver al inicio &raquo;</a>
    </div>
</main>

</body>
</html>
