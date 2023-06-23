@extends('layout/dashboard-template')
@section('title','Tickets')
@section('content')
<div class="content flex margin-content">

                <input type="text" placeholder="Search..." class="search-input">
                <button class="search-btn">
                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-labelledby="search">
                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                            stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>

  
        <div class="usuarios-registrados">
                <a href="{{('ticketeria/create')}}"><h2>Crear ticket</h2> </a>
        </div>
        <div class="roles">
                <a href="/prioridades"><h2>Prioridades</h2></a>
        </div>
        <div class="registro-actividad">
               <a href="/etiquetas"> <h2>Etiquetas</h2></a>
        </div>
        <div class="tickets">
            <a href="/categorias"><h2>Categorías</h2></a>
        </div>
  <table>
        <thead>
              <th>Título</th>
              <th>Descripción</th>
              <th>Agente</th>
              <th>Estado</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
        </thead>
        <tbody>
            @foreach($listaTickets AS $item)
              <tr>
                <td>{{$item->titulo}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->agente}}</td>
                <td>{{$item->estado}}</td>
                <td><button class="comment-btn">Comentar</button></td>
                <td><button class="detail-btn">Detalles</button></td>
                <td><button class="edit-btn">Editar</button></td>
                <td><button class="delete-btn">Eliminar</button></td>
              </tr>
              @endforeach
        </tbody>
      </table>
</div>
<style> 
  .content div {
    /* display:flex; */
    /* box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125), -2px -2px 4px rgba(0, 0, 0, 0.125); */
    margin: 50px 10px;
    width: 23%;
    height:10%;
    padding: 20px;
    border-radius: 10px;
  }

  .usuarios-registrados{
    margin-left: 20px;
    background-color:#c19a6b;
  }

  .tickets{
    background-color: #bcb88a;
  }

  .registro-actividad{
    background-color:#b2beb5;
  }
  
  .roles{
    background-color: #fdcac4;
  }
  table {
    width: 100%;
    max-width: 1250px;
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
  .comment-btn:hover{
    background-color: #ea9df2;
    color: white;
    font-weight:bold;
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
 .search-input {
    margin: 0 auto;
    width: 1100px;
    font-size: 1.3rem;
    padding-inline: 0.5em;
    border-top: none;
    outline: none;
    border-radius: 10px;
    padding: 10px;
  }
 ::placeholder {
    color:#60615d;
 }
 .search-btn{
    transform: translate(-150px,5px) ;
    background-color:white;
    border: none;
    text-align:right;
 }

</style>