@extends('layout/dashboard-template')
@section('title','Etiquetas')
@section('content')
<div class="content margin-content">
  <div class="title flex">
    <h2 id="title-tickets">Gestionar etiquetas</h2>
    <a href="{{url('etiquetas/create')}}">
      <button class="create-btn"> Crear etiqueta
      </button>
    </a>
  </div>
  <div class="white">
    <p> Toda la Información de las Etiquetas</p>
    <table>
      <thead>
        <th>NOMBRE</th>
        <th>ACCIÓN</th>
      </thead>
      <tbody>
        @foreach($lista AS $item)
        <tr>
          <td>{{$item->nombre}}</td>
          <td id="rol-column" class="flex">
            <a href="{{url('etiquetas/'.$item->id.'/edit')}}"><button class="edit-btn">Editar</button></a>
            <form action="{{url('etiquetas/'.$item->id.'')}}" method="post">
              @method('delete')
              @csrf
              <button class="delete-btn" type="submit">Eliminar</button>
            </form>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<style>
  .title {
    margin: 2% 1%;
  }

  #title-tickets {
    margin-bottom: 10px;
    margin-top: 10px;
    color: #505458;
  }

  .white {
    background-color: white;
    padding: 10px;
  }

  .white p {
    margin-left: 15px;
    margin-top: 10px;
    margin-bottom: 20px;
    color: #505458;
  }

  table {
    width: 100%;
    max-width: 1200px;
    margin: auto auto;
    border: 1px solid #505458;
    border-collapse: collapse;
    color: #505458;
    border-radius: 3px;
    table-layout: fixed;
  }

  thead {
    text-align: center;
    background-color: #ecf0f2;
    color: #6f7b8a;
    border-radius: 20px;
  }

  #rol-column {
    text-align: center;
  }

  thead th {
    padding: 10px;
  }

  td {
    padding: 40px;
    text-align: left;
    border-bottom: 1px solid black;
  }

  button {
    padding: 5px;
    margin: 10px;
    border-radius: 10px;
    width: 150px;
    height: 35px;
  }

  .delete-btn:hover {
    background-color: #FA5050;
    color: white;
    font-weight: bold;
  }

  .create-btn {
    background-color: #ecf0f2;
    width: 150px;
    height: 40px;
    padding: 10px;
    margin-left: 860px;
    transform: translate(-10px, 5px);
    font-weight: bold;
  }

  .edit-btn:hover {
    background-color: #54ADB4;
    color: white;
    font-weight: bold;
  }

  .create-btn:hover {
    background-color: #7d9d9c;
    color: white;
    font-weight: bold;
  }
</style>