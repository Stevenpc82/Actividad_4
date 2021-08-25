@extends('layout.template')
@section('title','create')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <form action="{{route('user.store')}}" method="post" >
                    @csrf

                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="">Correo</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <br>
                    <div class="form-group, p-2">
                        <button class="btn btn-primary">Crear nuevo usuario</button>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <h2 class="text-center">Bienvedido a nuestra pagina de prueba</h2>
                <br><br>
                <p class="text-center">En estos momentos usted esta siendo parte de un nuevo proyecto para fortalecer los conocimientos en
                    programacion, cualquier comentario y/o consejo sera bien recibido</p
            </div>
        </div>
    </div>
@endsection





