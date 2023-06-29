@extends('layout/dashboard-template')
@section('title','Crear etiqueta')
@section('content')

<div class="content margin-content">
    <h2 id="title-tickets"> Crear nueva etiqueta
        <a href="/etiquetas"><button class="salir">Salir</button></a>
    </h2>
    <div class="white">
        <form action="{{url('etiquetas')}}" method="post">
            @csrf
            <div>
                <label for="">Nombre:</label>
                <input type="text" id="nombre" class="nombre" name="nombre" value="{{old('nombre')}}" required>

            </div>
            <div>
                <button type="submit" class="editar"> Crear etiqueta</button>
            </div>
    </div>
    </form>
</div>
<style>
    #title-tickets {
        margin-bottom: 10px;
        margin-left: 10px;
        margin-top: 10px;
        color: #505458;
    }

    .white {
        background-color: white;
        padding: 10px;
    }

    .white p {
        margin-left: 15px;
        margin-top: 10px;
        margin-bottom: 20px;
        color: #505458;
    }

    form {
        margin: 20px;
    }

    form div {
        margin-top: 30px;
    }

    form label {
        font-size: 1.2rem;
    }

    .nombre {
        margin-left: 50px;
        width: 700px;
        border-radius: 5px;
        font-size: 1rem;
        padding-inline: 0.7em;
        outline: none;
        padding: 10px;
    }

    .salir {
        width: 130px;
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

    .editar {
        width: 150px;
        height: 40px;
        font-weight: bold;
        border-radius: 15px;
    }

    .editar:hover {
        background-color: #54ADB4;
        color: white;
        font-weight: bold;
    }
</style>