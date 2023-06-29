@extends('layout/dashboard-template')
@section('title','Detalles de usuario')
@section('content')

<div class="content margin-content">

    <h1>Detalles de usuario </h1>
    <h1>{{$user->name}}</h1>
    <table>
        <tr>
            <td class="label-column">Cedula del usuario:</td>
            <td class="content-column">{{$user->cedula}} </td>
        </tr>
        <tr>
            <td class="label-column">Correo electrónico del usuario:</td>
            <td class="content-column">{{$user->email_id}}</td>
        </tr>
        <tr>
            <td class="label-column">Género del usuario:</td>
            <td class="content-column">{{$user->genero}}</td>
        </tr>
        <tr>
            <td class="label-column">Rol del usuario:</td>
            <td class="content-column">{{$user->rol_id}}</td>
        </tr>
        <tr>
            <td class="label-column">Teléfono del usuario:</td>
            <td class="content-column">{{$user->telefono}}</td>
        </tr>
    </table>
    <a href="/usuarios"><button>Volver</button></a>

</div>

<style>
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

    button {
        margin-left: 20px;
        padding: 10px;
        border-radius: 10px;
        width: 110px;
        height: 45px;
    }

    button:hover {
        background-color: #3FBF7F;
        color: white;
        font-weight: bold;
    }
</style>