@extends('layout/template')
@section('title','Recuperar Contraseña')
@section('content')

<form action="">
    <h1 >
        Recuperar contraseña
    </h1>
    <div>
        <label for="">Correo electrónico:</label>
        <input type="email" name="" id=""  placeholder="Correo electrónico">
    </div>
    <input type="button" value="Cambiar contraseña"> 
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
        height: 30%;
    }
    form div{
        
        padding: 10px;
        margin: 10px;
        text-align: right;
    }
    a{
        text-decoration: none;
        margin: 4%;
    }
</style>