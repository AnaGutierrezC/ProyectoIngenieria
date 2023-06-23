<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tm_usuario;
use App\Models\tm_rolusuario;
use Illuminate\Support\Facades\DB;

class UsuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = tm_usuario::all();
        $roles = tm_rolusuario::all();
        return view('usuarios.index', ['listaUsuarios' => $usuarios,'listaroles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = tm_rolusuario::all();
        return view('usuarios.registro', ['lista' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store (Request $request)
    {
    $request->validate([
        'nombre'=>'required|max:40',
        'correo'=>'required|max:50',
        'password'=>'required|max:50',
        'rol'=>'required|max:15'
    ]);
    
    $user = new tm_usuario;
    $user->nombre = $request->input('nombre');
    $user->correo = $request->input('correo');
    $user->password = $request->input('password');
    $user->rol = $request->input('rol');
    $user->save();
    $usuarios = tm_usuario::all();
    return view('usuarios.index', ['listaUsuarios' => $usuarios]);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(tm_usuario $tm_usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tm_usuario $tm_usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tm_usuario $tm_usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tm_usuario $tm_usuario)
    {
        //
    }
}
