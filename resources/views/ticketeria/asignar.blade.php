@extends('layout/dashboard-template')
@section('title','Editar ticket')
@section('content')
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script> -->

<div class="content margin-content">
    <h1 id="title-tickets">
        Asignar ticket
        <a href="/ticketeria"><button class="salir">Salir</button></a>
    </h1>
    <form action="{{url('ticketeria/'.$ticket->id.'')}}" method="post">
        @method("PUT")
        @csrf
        <div>
            <!-- <label for="">Titulo:</label> -->
            <input type="text" class="title-inp" id="titulo" name="titulo" value="{{$ticket->ticket}}" required hidden>
        </div>
        <div>
            <!-- <label for="">Descripción:</label> -->
        </div>
        <div>
            <textarea class="desc-inp" name="descripcion" id="descripcion" class="descripcion" cols="30" rows="15" value="{{$ticket->subject}}" hidden>{{$ticket->subject}}</textarea>
        </div>
        <div class="inp-labels">
            <!-- <label for="">Prioridad:</label> -->
            <select name="prioridad" id="prioridad" required value="prioridad" hidden>
                @foreach($Lprioridades as $item)
                <option value="{{$item->id}}"> {{$item->nombre}}</option>
                @endforeach
            </select>
            <!-- <label for="">Categoría:</label> -->
            <select name="categoria" id="categoria" required value="categoria" hidden>
                @foreach($Lcategorias as $item)
                <option value="{{$item->id}}"> {{$item->nombre}}</option>
                @endforeach>
            </select>
            <!-- <label for="">Etiqueta:</label> -->
            <select name="etiqueta" id="etiqueta" required value="etiqueta" hidden>
                @foreach($Letiquetas as $item)
                <option value="{{$item->id}}"> {{$item->nombre}}</option>
                @endforeach>
            </select>
        </div>
        <div>
            <h1>{{$ticket->ticket}}</h1>
            <table>
                <tr>
                    <td class="label-column">Descripción:</td>
                    <td class="content-column">{{$ticket->subject}} </td>
                </tr>
                <tr>
                    <td class="label-column">Prioridad:</td>
                    <td class="content-column">{{$ticket->priority_id}}</td>
                </tr>
                <tr>
                    <td class="label-column">Estado:</td>
                    <td class="content-column">{{$ticket->estado_id}}</td>
                </tr>
                <tr>
                    <td class="label-column">Categoría:</td>
                    <td class="content-column">{{$ticket->category_id}}</td>
                </tr>
                <tr>
                    <td class="label-column">Etiqueta:</td>
                    <td class="content-column">{{$ticket->etiqueta_id}}</td>
                </tr>

            </table>
            <div>
                <label for="">Usuario:</label>
                <select name="usuario" id="usuario" required value="usuario" class="usuario">
                    @foreach($Lusuarios as $item)
                    <option value="{{$item->id}}"> {{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="enviar-btn">Enviar</button>
            </div>
    </form>
</div>
<style>
    #title-tickets {
        margin-bottom: 10px;
        margin-top: 10px;
        color: #505458;
    }

    form {
        color: #505458;
        margin-top: 10px;
        justify-content: space-around;
        border: 1px solid black;
        width: 100%;
        height: 73%;
    }

    form label {
        font-size: 1rem;
    }

    form div {
        margin: 20px;
    }

    form button {
        margin-bottom: 10px;
        margin-left: 84%;
        width: 200px;
        height: 30px;
        border-radius: 10px;
    }

    .title-inp {
        margin-left: 50px;
        width: 800px;
        border-radius: 5px;
        font-size: 1rem;
        padding-inline: 0.7em;
        outline: none;
        padding: 10px;
    }

    .archiv-inp {
        margin-left: 30px;

    }

    .desc-inp {
        width: 50%;
        resize: none;
        margin-left: 105px;
        padding: 10px;
    }

    .inp-labels label {
        margin: 3.5%;
    }

    form select {
        padding: 3.5px;
        border-radius: 5px;
    }

    .salir {
        width: 150px;
        height: 40px;
        font-weight: bold;
        margin-left: 89%;
        border-radius: 15px;
    }

    .salir:hover {
        background-color: red;
        color: white;
    }

    .usuario {
        margin-top: 20px;
        width: 200px;
    }

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

    .enviar-btn:hover {
        background-color: #c19a6b;
        color: white;
        font-weight: bold;
    }
</style>