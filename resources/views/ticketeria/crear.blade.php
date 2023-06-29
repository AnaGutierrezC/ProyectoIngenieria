@extends('layout/dashboard-template')
@section('title','Crear ticket')
@section('content')
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script> -->

<div class="content margin-content">
    <h1 id="title-tickets">
        Crear un ticket
        <a href="/ticketeria"><button class="salir">Salir</button></a>
    </h1>
    <form action="{{ url('ticketeria') }}" method="post">
        @csrf
        <div>
            <label for="">Asunto:</label>
            <input type="text" class="title-inp" id="titulo" name="titulo" value="{{old('titulo')}}" required>
        </div>

        <div class="inp-labels">
            <label for="">Categoría:</label>
            <select name="categoria" id="categoria">
                @foreach($Lcategorias as $item)
                <option value="{{$item->nombre}}"> {{$item->nombre}}</option>
                @endforeach>
            </select>
        </div>
        <div class="inp-labels">
            <label for="">Etiqueta:</label>
            <select name="etiqueta" id="etiqueta">
                @foreach($Letiquetas as $item)
                <option value="{{$item->nombre}}"> {{$item->nombre}}</option>
                @endforeach>
            </select>
        </div>
        <div class="inp-labels">
            <label for="">Prioridad:</label>
            <select name="prioridad" id="prioridad">
                @foreach($Lprioridades as $item)
                <option value="{{$item->id}}"> {{$item->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="label-desc">
            <label for="">Descripción:</label>
        </div>
        <div>
            <textarea class="desc-inp" name="descripcion" id="descripcion" class="descripcion" cols="25" rows="10" value="{{old('descripcion')}}"></textarea>
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
        margin-top: 10px;
        justify-content: space-around;
        border: 1px solid black;
        width: 100%;
        height: 70%;
        text-align: center;
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
        margin-left: 30px;
        width: 750px;
        border-radius: 5px;
        font-size: 1rem;
        padding-inline: 0.7em;
        outline: none;
        padding: 10px;
    }


    form select {
        padding: 8px;
        border-radius: 5px;
        width: 750px;
        margin-left: 12px;
    }

    .desc-inp {
        width: 60%;
        resize: none;
        margin-left: 120px;
        padding: 10px;
    }

    .label-desc {
        margin-left: -730px;
    }

    .salir {
        width: 150px;
        height: 40px;
        font-weight: bold;
        margin-left: 89%;
        border-radius: 15px;
    }

    .salir:hover {
        background-color: #FA5050;
        color: white;
        font-weight: bold;
    }

    .enviar-btn:hover {
        background-color: #54ADB4;
        color: white;
        font-weight: bold;
    }
</style>