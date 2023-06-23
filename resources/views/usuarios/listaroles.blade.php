@extends('layout/dashboard-template')
@section('title','Lista de roles')
@section('content')

<div class="content margin-content">
  <h1>Administradores</h1>
    <table>
      <thead>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Rol</th>
        <th></th>
        <th></th>
        <th></th>
      </thead>
      <tbody>
        @foreach($listaA AS $item)
            <tr>
              <td>{{$item->usu_nom}}</td>
              <td>{{$item->usu_correo}}</td>
              <td id="rol-column">{{$item->rol}}</td>
              <td><a href="/usuarios/detail"><button class="detail-btn">Detalles</button></a></td>
              <td><a href="/usuarios/edit"><button class="edit-btn">Editar</button></a></td>
              <td><button class="delete-btn">Eliminar</button></td>
            </tr>
        @endforeach
        </tbody>
      </table>
  <h1>Agentes</h1>
    <table>
      <thead>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Rol</th>
        <th></th>
        <th></th>
        <th></th>
      </thead>
      <tbody>
            @foreach($listaG AS $item)
              <tr>
                <td>{{$item->usu_nom}}</td>
                <td>{{$item->usu_correo}}</td>
                <td id="rol-column">{{$item->rol}}</td>
                <td><a href="/usuarios/detail"><button class="detail-btn">Detalles</button></a></td>
                <td><a href="/usuarios/edit"><button class="edit-btn">Editar</button></a></td>
                <td><button class="delete-btn">Eliminar</button></td>
              </tr>
            @endforeach
      </tbody>
    </table>
  <h1>Usuarios</h1>
      <table>
        <thead>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Rol</th>
              <th></th>
              <th></th>
              <th></th>
        </thead>
        <tbody>
            @foreach($listaU AS $item)
              <tr>
                <td>{{$item->usu_nom}}</td>
                <td>{{$item->usu_correo}}</td>
                <td id="rol-column">{{$item->rol}}</td>
                <td><a href="/usuarios/detail"><button class="detail-btn">Detalles</button></a></td>
                <td><a href="/usuarios/edit"><button class="edit-btn">Editar</button></a></td>
                <td><button class="delete-btn">Eliminar</button></td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>

<style>
  table {
    width: 100%;
    max-width: 1250px;
    border: 1px solid #60615d;
    border-collapse: collapse;
    border-radius: 3px;
    border-style: hidden;
    /* hide standard table (collapsed) border */
    box-shadow: 0 0 0 2px #666;
    /* this draws the table border */
    table-layout: fixed;
  }

  thead {
    text-align: center;
    background-color: #adc798;

    border-radius: 20px;
    border-bottom: solid 1px black;
  }
  #rol-column {
    text-align:center;
  }

  thead th {
    padding: 10px;
  }

  td {
    padding: 20px;
    text-align: left;
    border-bottom: 1px solid black;
  }
  button{
    padding: 10px;
    border-radius: 10px;
    width: 110px;
    height: 50%;
  }
  .detail-btn:hover{
    background-color: #3FBF7F;
    color: white;
    font-weight:bold;
  }
  .edit-btn:hover{
    background-color: #54ADB4;
    color: white;
    font-weight:bold;
  }
  .delete-btn:hover{
    background-color: #FA5050;
    color: white;
    font-weight:bold;
  }
</style>