<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>page | @yield('title') </title>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <h2 class="text col text-center text-secondary">Proyecto ADSI</h2>

    </div>
</nav>

<!--End Navbar -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="d-flex flex-column flex-shrink-0 p-4 bg-light" style="height: 100%;">
                    <h3 class="text text-secondary">Opciones</h3>
                <hr>
                <ul class="nav nav-pills mb-auto">
                    <li class="nav-item p-1">
                        <a href="{{route('user.index')}}" class="btn btn-outline-dark " aria-current="page">Base de datos</a>
                    </li>
                    <li class="nav-item p-1">
                        <a href="{{route('user.create')}}" class="btn btn-outline-dark" aria-current="page" >Crear Usuario</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            @yield('content')
        </div>
    </div>
</div>

<!--Footer-->
<div class="container">
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2021 Stiven Pineda - ADSI, Inc</p>
    </footer>
</div>

</body>
</html>
