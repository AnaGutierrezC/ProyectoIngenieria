@extends('layout/dashboard-template')
@section('title','Etiquetas')
@section('content')
<div class="content margin-content">
<div class="title flex">
    <h1>Lista de etiquetas registradas</h1> 
  </div>

  <div>

    <table>
        <thead>
              <th>Nombre</th>
              <th></th>
        </thead>
        <tbody>
            @foreach($lista AS $item)
              <tr>
              <td>{{$item->nombre}}</td>
              <td id="rol-column"><button class="edit-btn">Editar</button></td>
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
    /* this draws the table border */
    table-layout: fixed;
  }

  thead {
    text-align:left;
    background-color: #adc798;
    border-radius: 20px;
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
    width: 150px;
    height: 50%;
  }
  
  .edit-btn:hover{
    background-color: #54ADB4;
    color: white;
    font-weight:bold;
  }

</style>