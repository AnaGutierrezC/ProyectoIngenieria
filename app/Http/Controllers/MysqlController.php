<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tm_usuario;
use App\Models\tm_rolusuario;
use App\Models\tm_categoria;
use App\Models\tm_prioridad;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
 
class MysqlController extends Controller
{
    public function obtenerTodosLosRoles(){
        return tm_rolusuario::all();
    }
    public function obtenerTodasLasCategorias(){
        return tm_categoria::all();
    }
    public function obtenerTodasLasPrioridades(){
        return tm_prioridad::all();
    }
    // public function index(){

    //     $category = tm_usuario::all();
    //     // return view('usuarios') ->with('name', 'category');       
    //     return view('usuarios.index',['lista'=>$usuarios]);
    //     // $usuarios = DB::select('SELECT * FROM tm_usuario WHERE rol =Agente');
    //     // return view::make('usuarios.index',["lista"=>$usuarios]); 
    // }
}

