@extends('layout/dashboard-template')
@section('title','Editar Perfil')
@section('content')

<div class="content margin-content">
    <h1 id="title-tickets">Información de {{$usuario->name}}</h1>

    <form action="{{url('usuarios/'.$usuario->id.'')}}" method="post">
        @method("PUT")
        @csrf
    <div>
        <label for="">Nombre Completo</label>
    </div>
    <div>
    <input type="text" placeholder="Nombre" name="nombre" id="nombre"value="{{$usuario->name}}"required>
    </div>
    <div>
        <label for="">Correo Electrónico</label>        
    </div>
    <div>
    <input type="email" name="correo" id="correo"  value="{{$usuario->email_id}}"required>
    </div>
    <div>
        <label for="">Cedula de Identidad</label>
    </div>
    <div>
    <input type="text" name="cedula" id="cedula"  value="{{$usuario->cedula}}"required>
    </div>
    <div>
    <label for="">Teléfono</label>
    </div>
    <div>
        <input type="text" name="telefono" id="telefono" value="{{$usuario->telefono}}"required>
    </div>
    <div>
    <label for="">Género:</label>
    </div>
    <div>
        <select name="genero" id="genero" value ="genero"required>
                    <option value="Otro"> Otro </option>
                    <option value="Femenino"> Femenino</option>
                    <option value="Masculino"> Masculino </option>
                    
        </select>
    </div>
    <div>
        <button type="submit" class="edit-btn"> Guardar cambios</button>
    </div>
</form>

<style>
     #title-tickets {
        margin-bottom: 10px;
        margin-top: 10px;
        color: #505458;
    }
    body{
        text-align:left;
    }
    form{
        text-align: left;        
        width: 30%;
        height: 45%;
    }
    form div{
        padding: 10px;
        margin: 10px;
    }
    form input,select{
        width: 700px;
        height: 40px;
        font-size: medium;
        padding-left: 10px;
        border:none;
    }
    button{
        margin-left: 50%;
        padding: 10px;
        border-radius: 10px;
    }
    .edit-btn:hover {
    background-color: #54ADB4;
    color: white;
    font-weight: bold;
  }
</style>
