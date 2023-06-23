<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tm_etiqueta;
use Illuminate\Support\Facades\DB;


class EtiquetaController extends Controller
{
    public function index(){
        $etiquetas = tm_etiqueta::all();
        return view('etiquetas.index',['lista' => $etiquetas]);
    }
}
