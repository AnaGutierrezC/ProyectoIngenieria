@extends('layout/dashboard-template')
@section('title','Detalles de usuario')
@section('content')

<div class="content margin-content">
    @foreach($lista AS $item)
        <h1>Detalles de usuario </h1>
        <h1>{{$item->usu_nom}}</h1>
        <table>
            <tr>
                <td class="label-column">Rol del usuario:</td>
                <td class="content-column">{{$item->rol}} </td>
            </tr>
            <tr>
                <td class="label-column">Correo electrónico del usuario:</td>
                <td class="content-column">{{$item->usu_correo}}</td>
            </tr>
        </table>
       
    @endforeach
</div>

<style>
table{
    font-size: 20px;
}
    td{
        padding:20px;
    }
    .content-column {
        padding-left:120px;
        text-align: left;
    }
</style>