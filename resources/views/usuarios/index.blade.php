@extends('layout/dashboard-template')
@section('title','Lista de usuarios')
@section('content')
<div class="content margin-content">
  <div class="title flex">
    <h2 id="title-tickets"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
      </svg> Gestionar Usuarios</h2>
    </a>
  </div>

  <div class="white">
    <p> Toda la Información de los Usuarios</p>
    <table>
      <thead>
        <th>NOMBRE COMPLETO</th>
        <th>CORREO</th>
        <th>TELEFONO</th>
        <th>ACCIÓN</th>
      </thead>
      <tbody>
        @foreach($listaUsuarios AS $item)
        <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->email_id}}</td>
          <td id="rol-column">{{$item->telefono}}</td>
          <td class="flex" id="btns">
            <a href="{{url('usuarios/'.$item->id.'')}}"><button class="detail-btn">Detalles</button></a>
            <a href="{{url('usuarios/'.$item->id.'/edit')}}"><button class="edit-btn">Editar</button></a>
            <form action="{{url('usuarios/'.$item->id.'')}}" method="post">
              @method('delete')
              @csrf
              <button class="delete-btn" type="submit">Eliminar</button>
            </form>
          </td>
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

  #title-tickets svg {
    fill: gray;
  }

  .white {
    background-color: white;
    padding: 10px;
  }

  .white p {
    margin-left: 20px;
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

  }

  thead {
    text-align: center;
    background-color: #ecf0f2;
    color: #6f7b8a;
    border-radius: 20px;
    border-bottom: solid 1px black;
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
    margin: 3px;
    padding: 5px;
    border: 1px solid gray;
  }

  #btns {
    text-align: center;
  }

  .detail-btn:hover {
    background-color: #3FBF7F;
    color: white;
    font-weight: bold;
  }

  .edit-btn:hover {
    background-color: #54ADB4;
    color: white;
    font-weight: bold;
  }

  .delete-btn:hover {
    background-color: #FA5050;
    color: white;
    font-weight: bold;
  }

  .filter-btn {
    background-color: #ACE1AF;
    width: 150px;
    height: 40px;
    padding: 10px;
    transform: translate(-10px, 9px);
    font-weight: bold;
  }

  .filter-btn:hover {
    background-color: #FF5733;
    color: white;
  }
</style>