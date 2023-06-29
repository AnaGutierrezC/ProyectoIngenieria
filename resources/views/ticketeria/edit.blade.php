@extends('layout/dashboard-template')
@section('title','Editar ticket')
@section('content')
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script> -->

<div class="content margin-content">
    <h1>
        Editar ticket
        <a href="/ticketeria"><button class="salir">Salir</button></a>
    </h1>
    <form action="{{url('ticketeria/'.$ticket->id.'')}}" method="post">
        @method("PUT")
        @csrf
        <div>
            <label for="">Titulo:</label>
            <input type="text" class="title-inp" id="titulo" name="titulo" value="{{$ticket->ticket}}" required>
        </div>
        <div>
            <label for="">Descripción:</label>
        </div>
        <div>
            <textarea class="desc-inp" name="descripcion" id="descripcion" class="descripcion" cols="30" rows="15" value="{{$ticket->subject}}">{{$ticket->subject}}</textarea>
        </div>

        <div class="inp-labels">
            <label for="">Prioridad:</label>
            <select name="prioridad" id="prioridad" required value="prioridad">
                @foreach($Lprioridades as $item)
                <option value="{{$item->id}}"> {{$item->nombre}}</option>
                @endforeach
            </select>
            <label for="">Categoría:</label>
            <select name="categoria" id="categoria" required value="categoria">
                @foreach($Lcategorias as $item)
                <option value="{{$item->nombre}}"> {{$item->nombre}}</option>
                @endforeach>
            </select>
            <label for="">Etiqueta:</label>
            <select name="etiqueta" id="etiqueta" required value="etiqueta">
                @foreach($Letiquetas as $item)
                <option value="{{$item->nombre}}"> {{$item->nombre}}</option>
                @endforeach>
            </select>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>

    </form>
</div>
<style>
    form {
        margin-top: 10px;
        justify-content: space-around;
        border: 1px solid black;
        width: 100%;
        height: 65%;
    }

    form label {
        font-size: 1rem;
    }

    form div {
        margin: 20px;
    }

    form button {
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
        background-color: #ACE1AF;
        width: 150px;
        height: 40px;
        font-weight: bold;
        margin-left: 89%;
        border-radius: 15px;
    }
</style>