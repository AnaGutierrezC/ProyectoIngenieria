@extends('layout/template')
@section('title','Registro de Usuario')
@section('content')


<form action="{{ url('usuarios') }}" method="post">
    @csrf
<h1 >
    Registro de usuario
</h1>
    <div>
        <label for="">Nombre:</label>
        <input type="text" placeholder="Nombre" name="nombre" id="nombre" value="{{old('nombre')}}"required>
    </div>
    <div>
        <label for="">Correo electrónico:</label>
        <input type="email" name="correo" id="correo"  placeholder="Correo electrónico" value="{{old('correo')}}"required>
    </div>
    <div>
        <label for="">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder=" Contraseña" value="{{old('password')}}"required>
    </div>
    <!-- <div>
        <label for="">Contraseña</label>
        <input type="password" name="password-n" id="password-n" placeholder="Escriba de nuevo su contraseña" value="{{old('password-n')}}"required>
    </div> -->
    <div>
       
        <label for="">Rol</label>
        <select name="rol" id="rol" required>
        <option value="Seleccionar rol">Seleccionar rol</option>
        @foreach($lista as $item)
        <option value="{{$item->id}}">{{$item->nombre}}</option>
        @endforeach
        </select>
    
    </div>
    <button type="submit"> Registrarse</button>
    
</form>

<div class= "links">
    <a href="/usuarios/iniciosesion">Iniciar sesión</a>
</div>


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