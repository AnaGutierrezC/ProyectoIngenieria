<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', ['listaUsuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios = new User();

        $usuarios->name = $request->input('nombre');
        $usuarios->email_id = $request->input('correo');
        $usuarios->cedula = $request->input('cedula');
        $usuarios->password = $request->input('password');
        $usuarios->telefono = $request->input('telefono');
        $usuarios->genero = $request->input('genero');
        $usuarios->rol_id = 3;
        $usuarios->save();

        // $usu = User::all();
        return view('page');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view('usuarios.detail', ['user' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuarios = User::find($id);

        $usuarios->name = $request->input('nombre');
        $usuarios->email_id = $request->input('correo');
        $usuarios->cedula = $request->input('cedula');
        $usuarios->password = $request->input('password');
        $usuarios->telefono = $request->input('telefono');
        $usuarios->genero = $request->input('genero');
        $usuarios->rol_id = 1;
        $usuarios->save();

        $usu = User::all();
        return view('usuarios.index', ['listaUsuarios' => $usu]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        $usuarios = User::all();
        return view('usuarios.index', ['listaUsuarios' => $usuarios]);
    }
}
