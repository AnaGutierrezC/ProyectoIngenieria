<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\categoria;
use App\Models\etiqueta;
use App\Models\prioridad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('ticketeria.index', ['listaTickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = categoria::all();
        $etiquetas = etiqueta::all();
        $prioridades = prioridad::all();

        return view('ticketeria.crear', ['Lcategorias' => $categorias, 'Letiquetas' => $etiquetas, 'Lprioridades' => $prioridades]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tickets = new Ticket();

        $tickets->subject = $request->input('descripcion');
        $tickets->category_id = $request->input('categoria');
        $tickets->priority_id = $request->input('prioridad');
        $tickets->etiqueta_id = $request->input('etiqueta');
        $tickets->estado_id = 1;
        $tickets->ticket = $request->input('titulo');
        $tickets->save();

        $tickets = Ticket::all();
        return view('ticketeria.index', ['listaTickets' => $tickets]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('ticketeria.show', ['listaT' => $ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);
        $categorias = categoria::all();
        $etiquetas = etiqueta::all();
        $prioridades = prioridad::all();

        return view('ticketeria.edit', ['ticket' => $ticket, 'Lcategorias' => $categorias, 'Letiquetas' => $etiquetas, 'Lprioridades' => $prioridades]);
    }
    public function asign($id)
    {
        $ticket = Ticket::find($id);
        $categorias = categoria::all();
        $etiquetas = etiqueta::all();
        $prioridades = prioridad::all();
        $usuarios = User::all();

        return view('ticketeria.asignar', ['Lusuarios' => $usuarios, 'ticket' => $ticket, 'Lcategorias' => $categorias, 'Letiquetas' => $etiquetas, 'Lprioridades' => $prioridades]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tickets = Ticket::find($id);

        $tickets->subject = $request->input('descripcion');
        $tickets->email_id = $request->input('usuario');
        $tickets->category_id = $request->input('categoria');
        $tickets->priority_id = $request->input('prioridad');
        $tickets->etiqueta_id = $request->input('etiqueta');
        $tickets->ticket = $request->input('titulo');

        $tickets->save();

        $tickets = Ticket::all();
        return view('ticketeria.index', ['listaTickets' => $tickets]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        $tickets = Ticket::all();
        return view('ticketeria.index', ['listaTickets' => $tickets]);
    }
}
