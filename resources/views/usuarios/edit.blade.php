@extends('layout/dashboard-template')
@section('title','Editar usuario')
@section('content')

<div class="content margin-content">
    <h1>EDITAR USUARIO</h1>

    <form action="">
    @foreach($lista AS $item)

    <div>
        <label for="">Nombre:</label>
        <input type="text" value="{{$item->usu_nom}}">
    </div>
    <div>
        <label for="">Correo electrónico:</label>
        <input type="email" name="" id=""  value="{{$item->usu_correo}}">
    </div>
    <div>
    @endforeach
    <input type="button" value="Guardar cambios"> 
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
