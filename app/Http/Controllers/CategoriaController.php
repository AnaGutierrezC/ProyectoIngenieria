<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = categoria::all();
        return view('categorias.index', ['lista' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorias = new categoria();

        $categorias->nombre = $request->input('nombre');
        $categorias->save();

        $categorias = categoria::all();
        return view('categorias.index', ['lista' => $categorias]);
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria = categoria::find($id);
        return view('categorias.edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categorias = categoria::find($id);
        $categorias->nombre = $request->input('nombre');
        $categorias->save();

        $categorias = categoria::all();
        return view('categorias.index', ['lista' => $categorias]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)

    {
        $category = categoria::find($id);
        $category->delete();
        $categorias = categoria::all();
        return view('categorias.index', ['lista' => $categorias]);
        //
    }
}
