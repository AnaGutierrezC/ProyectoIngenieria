@extends('layout/dashboard-template')
@section('title','Editar usuario')
@section('content')

<div class="content margin-content">
    <h1>EDITAR USUARIO</h1>

    <form action="{{url('usuarios/'.$usuario->id.'')}}" method="post">
        @method("PUT")
        @csrf
    <div>
        <label for="">Nombre:</label>
        <input type="text" placeholder="Nombre" name="nombre" id="nombre"value="{{$usuario->name}}"required>
    </div>
    <div>
        <label for="">Correo electrónico:</label>
        <input type="email" name="correo" id="correo"  value="{{$usuario->email_id}}"required>
    </div>
    <div>
        
        <label for="">Cedula:</label>
        <input type="text" name="cedula" id="cedula"  value="{{$usuario->cedula}}"required disabled>
    </div>
    <div>
        <label for="">Telefono:</label>
        <input type="text" name="telefono" id="telefono" value="{{$usuario->telefono}}"required>
    </div>
    <div>
    <label for="">Género:</label>
        <select name="genero" id="genero" value ="genero"required>
                    <option value="Otro"> Otro </option>
                    <option value="Femenino"> Femenino</option>
                    <option value="Masculino"> Masculino </option>
                    
        </select>
    </div>
    <div>
        <button type="submit"> Editar</button>
    </div>
</form>

<style>
    body{
        text-align:center;
    }
    form{
        margin-top: 10%;
        margin-left: 35%;
        text-align: center;        
        justify-content: space-around;
        border: 1px solid black;
        width: 30%;
        height: 45%;
    }
    form div{
        padding: 10px;
        margin: 10px;
        text-align: right;
    }
   .links{
        margin-left: 35%;
        width: 30%;
        text-align: left;
    }
   .links a{
        text-decoration:none;
        color: black;
    }
</style>
