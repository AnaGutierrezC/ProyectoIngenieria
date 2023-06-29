@extends('layout/template')
@section('title','Registro de Usuario')
@section('content')


<form action="{{ url('usuarios') }}" method="post">
    @csrf
    <h1>
        Registro de usuario
    </h1>
    <div>
        <label for="">Nombre:</label>
        <input type="text" placeholder="Nombre" name="nombre" id="nombre" value="{{old('nombre')}}" required>
    </div>
    <div>
        <label for="">Correo electrónico:</label>
        <input type="email" name="correo" id="correo" placeholder="Correo electrónico" value="{{old('correo')}}" required>
    </div>
    <div>
        <label for="">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder=" Contraseña" value="{{old('password')}}" required>
    </div>
    <div>

        <label for="">Cedula:</label>
        <input type="text" name="cedula" id="cedula" placeholder=" Cedula" value="{{old('cedula')}}" required>
    </div>
    <div>
        <label for="">Telefono:</label>
        <input type="text" name="telefono" id="telefono" placeholder=" telefono" value="{{old('telefono')}}" required>
    </div>
    <div>
        <label for="">Género:</label>
        <select name="genero" id="genero" required>
            <option value="Otro"> Sin Especificar </option>
            <option value="Femenino"> Femenino</option>
            <option value="Masculino"> Masculino </option>

        </select>
    </div>

    <button type="submit" class="registro-btn"> Registrarse</button>

</form>

<div class="links">
    <div> <a href="{{url('')}}">Regresar</a></div>
    <div><a href="#">Iniciar sesión</a></div>
</div>


<style>
    body {
        text-align: center;
        background: #99c4c8;
    }

    form {
        color: white;
        margin-top: 5%;
        margin-left: 35%;
        text-align: center;
        justify-content: space-around;
        border: 1px solid white;
        font-weight: bold;
        width: 30%;
        height: 85%;
        border-radius: 10px;
    }

    form input {
        height: 25px;
        font-size: 15px;
        margin-left: 20px;
        margin-right: 30px;
        margin-top: 30px;
        padding: 10px;
        border-radius: 5px;
        font-family: Verdana, sans-serif;
    }

    form div {
        padding: 10px;
        margin: 10px;
        text-align: right;
    }

    form select {
        height: 25px;
        font-size: 15px;
        margin-left: 20px;
        margin-right: 30px;
        margin-top: 30px;
        border-radius: 5px;
        margin: 10px;
    }

    .links {
        display: flex;
        margin-left: 35%;
        width: 30%;
        justify-content: space-between;
    }

    .links a {
        text-decoration: none;
        color: white;
    }

    .links a:hover {
        color: black;
    }

    .registro-btn {
        padding: 7px;
        border-radius: 5px;
        background-color: #0aa699;
        font-weight: bold;
    }

    .registro-btn:hover {
        background-color: #58f7ea;
        color: black;
        font-weight: bold;
    }
</style>