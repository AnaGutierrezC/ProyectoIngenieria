<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tm_ticket;

use Illuminate\Support\Facades\DB;


class TicketController extends Controller
{
    public function index(){
        $tickets = tm_ticket::all();
        return view('ticketeria.index',['lista' => $tickets]);
    }
    public function crearTicket(){
        return view('ticketeria.crear');
    }
}
