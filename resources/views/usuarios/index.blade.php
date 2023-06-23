@extends('layout/dashboard-template')
@section('title','Lista de usuarios')
@section('content')
<div class="content margin-content">
  <div class="title flex">
    <h1>Lista de usuarios registrados</h1> 
    <a href="/usuarios/listaroles">
      <button class="filter-btn"> Filtrar por roles <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/></svg>
      </button>
      <a href="{{url('usuarios/create')}}"><button></button></a>
  </a>
  </div>

  <div>
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
            @foreach($listaUsuarios AS $item)
              <tr>
                <td>{{$item->nombre}}</td>
                <td>{{$item->correo}}</td>
                <td id="rol-column">{{$item->rol}}</td>
                <td><a href="/usuarios/detail"><button class="detail-btn">Detalles</button></a></td>
                <td><a href="/usuarios/edit"><button class="edit-btn">Editar</button></a></td>
                <td><button class="delete-btn">Eliminar</button></td>
              </tr>
            @endforeach
        </tbody>
      </table>
  </div>
</div> 
<style>
  .title{
    margin: 2% 1%;
  }
  table {
    width: 100%;
    max-width: 1200px;
    margin: auto auto;
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
    padding: 40px;
    text-align: left;
    border-bottom: 1px solid black;
  }

  button{
    padding: 10px;
    border-radius: 10px;
    width: 130px;
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
  .filter-btn{
    background-color: #ACE1AF;
    width: 150px;
    height: 40px;
    padding: 10px;
    transform: translate(-10px,9px) ;
    font-weight:bold;
  }
  .filter-btn:hover{
    background-color: #FF5733;
    color: white;
  }
</style>
