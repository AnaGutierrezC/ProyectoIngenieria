@extends('layout/dashboard-template')
@section('title','Detalle ticket')
@section('content')


<div class="content margin-content">

    <h1>Detalles del Ticket </h1>
    <h1>{{$listaT->ticket}}</h1>
    <table>
        <tr>
            <td class="label-column">Descripción:</td>
            <td class="content-column">{{$listaT->subject}} </td>
        </tr>
        <tr>
            <td class="label-column">Prioridad:</td>
            <td class="content-column">{{$listaT->priority_id}}</td>
        </tr>
        <tr>
            <td class="label-column">Estado:</td>
            <td class="content-column">{{$listaT->estado_id}}</td>
        </tr>
        <tr>
            <td class="label-column">Categoría:</td>
            <td class="content-column">{{$listaT->category_id}}</td>
        </tr>
        <tr>
            <td class="label-column">Etiqueta:</td>
            <td class="content-column">{{$listaT->etiqueta_id}}</td>
        </tr>
        <tr>
            <td class="label-column">Usuario:</td>
            <td class="content-column">{{$listaT->email_id}}</td>
        </tr>
    </table>
    <a href="/ticketeria"><button>Volver</button></a>

</div>

<style>
    div {
        margin-bottom: 10px;
    }

    table {
        font-size: 20px;
    }

    td {
        padding: 20px;
    }

    .content-column {
        padding-left: 120px;
        text-align: left;
    }

    button {
        margin-left: 20px;
        padding: 10px;
        border-radius: 10px;
        width: 110px;
        height: 45px;
    }

    button:hover {
        background-color: #3FBF7F;
        color: white;
        font-weight: bold;
    }
</style>

</div>