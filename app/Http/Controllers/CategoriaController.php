<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tm_categoria;

class CategoriaController extends Controller
{
    public function index(){
        $tickets = tm_categoria::all();
        return view('categorias.index',['lista' => $tickets]);
    }
}
