<?php

namespace App\Http\Controllers;

use App\Models\etiqueta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etiquetas = etiqueta::all();
        return view ('etiquetas.index',['lista'=>$etiquetas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('etiquetas.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $etiquetas = new etiqueta();  

        $etiquetas->nombre = $request->input('nombre');
        $etiquetas->save();

        $etiquetas = etiqueta::all();
        return view ('etiquetas.index',['lista'=>$etiquetas]);
    }

    /**
     * Display the specified resource.
     */
    public function show(etiqueta $etiqueta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $etiqueta = etiqueta::find($id);
        return view('etiquetas.edit', ['etiqueta' => $etiqueta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $etiquetas = etiqueta::find($id);
        $etiquetas->nombre = $request->input('nombre');
        $etiquetas->save();

        $etiqueta = etiqueta::all();
        return view ('etiquetas.index',['lista'=>$etiqueta]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {   
        $eti = etiqueta::find($id);
        $eti->delete();
        $etiquetas = etiqueta::all();
        return view ('etiquetas.index',['lista'=>$etiquetas]);
    }
}
