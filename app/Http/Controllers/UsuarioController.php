<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tm_usuario;
use App\Models\tm_rolusuario;
use Illuminate\Support\Facades\DB;



class UsuarioController extends Controller
{
    public function index()
    {
        $lista_usuarios = tm_usuario::all();
        return view('usuarios.index', ['listaUsuarios' => $lista_usuarios]);
    }
    public function registrar(){

        $roles = tm_rolusuario::all();
        return view('usuarios.registro', ['lista' => $roles]);
    }
    public function iniciarSesion()
    {
        return view('usuarios.iniciosesion');

    }
    public function recuperarContraseña()
    {
        return view('usuarios.recuperarpassword');
    }
    public function obtenerTodosLosAgentes()
    {
        return tm_usuario::where("rol", "Agente")->get();
        // ->first();  -> para tener al primero que coincida con esa búsqueda
    }
    public function obtenerTodosLosAdministradores()
    {
        return tm_usuario::where("rol", "Administrador")->get();
    }
    public function obtenerTodosLosUsauriosHabituales()
    {
        return tm_usuario::where("rol", "Usuario")->get();
    }
    public function store(Request $request)
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
    return view('usuarios.index');
    }
    public function editarEllUsuario(){
        $nombre = tm_usuario::where("usu_id","17")->get();
        
        return view('usuarios.edit', ['lista' => $nombre]);
    }
    public function obtenerTodosLosRoles(){
        $admin = tm_usuario::where("rol", "Administrador")->get();
        $agente = tm_usuario::where("rol", "Agente")->get();
        $usuario = tm_usuario::where("rol", "Usuario")->get();
        return view('usuarios.listaroles', ['listaA' => $admin,'listaG' => $agente,'listaU' => $usuario]);
    }
    public function detallesDelUsuario(){
        $nombre = tm_usuario::where("usu_id","17")->get();
        return view('usuarios.detail', ['lista' => $nombre]);
    }
}