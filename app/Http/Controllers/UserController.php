<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create')->with('status', 'Se ha creado correctamente ');
    }

//    detalles por ID
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email')
        ]);
        return redirect('user')->with('create', 'Se ha creado un nuevo usuario');
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('user')->with('destroy', 'Se ha eliminado el usuario: '.$id);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id)->update([
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),
        ]);


        return redirect('user')->with('status', 'Se ha actualizado correctamente el usuario: '.$id);
    }
}
