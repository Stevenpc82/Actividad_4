<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(4);
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
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
        return redirect('user');
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('user');
    }
}
