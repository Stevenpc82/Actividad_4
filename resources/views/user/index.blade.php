@extends('layout.template')
@section('title','index')
@section('content')
    @if(session('status'))
        <div class="alert alert-success col text-center">
            {{session('status')}}
        </div>
    @endif
    @if(session('create'))
        <div class="alert alert-success col text-center">
            {{session('create')}}
        </div>
    @endif
    @if(session('destroy'))
        <div class="alert alert-danger col text-center">
            {{session('destroy')}}
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Fecha Creación</th>
                            <th>Fecha Modificación</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->lastname}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td>
                                    <form action="{{route('user.destroy',$user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('user.show',$user->id)}}"
                                           class="btn btn-sm btn-outline-info">Detalles</a>
                                        <a href="{{route('user.edit',$user->id)}}"
                                           class="btn btn-sm btn-outline-warning ">Editar</a>
                                        <button class="btn btn-sm btn-outline-danger submit-prevent-button" type="sumbit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                {{$users->links()}}
            </div>
        </div>
    </div>
@endsection
