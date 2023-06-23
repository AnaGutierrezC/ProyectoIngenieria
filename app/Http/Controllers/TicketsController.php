<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tm_ticket;
use Illuminate\Support\Facades\DB;


class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista_tickets = tm_ticket::all();
        return view('ticketeria.index', ['listaTickets' => $lista_tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ticketeria.crear');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'titulo'=>'required|max:40',
                'descripcion'=>'required|max:50',
                'prioridad'=>'required|max:50',
                'categoria'=>'required|max:50',
                'etiqueta'=>'required|max:50'
            ]);
            
            $ticket = new tm_ticket;
            $ticket->titulo = $request->input('titulo');
            $ticket->descripcion = $request->input('descripcion');
            $ticket->estado = $request->input('descripcion');
            $ticket->prioridad = $request->input('prioridad');
            $ticket->categoria = $request->input('categoria');
            $ticket->etiqueta = $request->input('etiqueta');
            $ticket->agente = $request->input('etiqueta');
            $ticket->save();

            return view('ticketeria.confirmacion');
         
            
    }

    /**
     * Display the specified resource.
     */
    public function show(tm_ticket $tm_ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tm_ticket $tm_ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tm_ticket $tm_ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tm_ticket $tm_ticket)
    {
        //
    }
}
