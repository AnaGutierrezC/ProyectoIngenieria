<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tm_prioridad;
use Illuminate\Support\Facades\DB;
class PrioridadController extends Controller
{
    public function index(){
        $prioridades = tm_prioridad::all();
        return view('prioridades.index',['lista' => $prioridades]);
    }
}
