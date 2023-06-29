@extends('layout/dashboard-template')
@section('title','Lista de Tickets')
@section('content')
<div class="content margin-content">
  <div class="title flex">
    <h2 id="title-tickets">Lista de Tickets</h2>

    <button class="create-btn"> <a href="{{url('ticketeria/create')}}">Crear Ticket</a>
    </button>

  </div>

  @foreach($listaTickets AS $item)
  <div class="div-ticket">
    <h3>{{$item->ticket}}</h3>
    <p> {{$item->subject}} </p>
    <p> Ticket #{{$item->id}} - Fecha de creación {{$item->created_at}} <span> Open </span></p>
    <div class="btn-ticket flex">
      <a href="{{url('ticketeria/'.$item->id.'/asign')}}"><button class="asign-btn">Asignar</button></a>
      <button class="comment-btn">Comentar</button>
      <a href="{{url('ticketeria/'.$item->id.'')}}"><button class="detail-btn"> Detalles</button></a>
      <a href="{{url('ticketeria/'.$item->id.'/edit')}}"><button class="edit-btn">Editar</button></a>
      <form action="{{url('ticketeria/'.$item->id.'')}}" method="post">
        @method('delete')
        @csrf
        <button class="delete-btn" type="submit">Eliminar</button>
      </form>
    </div>
  </div>
  @endforeach

</div>
<style>
  .title {
    margin: 2% 1%;
  }

  .div-ticket {
    margin-left: 20px;
    background-color: white;
    width: 97%;
    border-radius: 10px;
  }

  .div-ticket div {
    margin: 30px;
  }

  .div-ticket p {
    margin-top: 5px;
    margin-left: 20px;
  }

  p span {
    color: #FA5050;
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

  .div-ticket button {

    padding: 5px;
    border-radius: 10px;
    width: 200px;
    height: 30px;
    margin-bottom: 15px;
    margin-left: 20px;
  }

  #title-tickets {
    margin-left: 20px;
    margin-bottom: 40px;
    margin-top: 80px;
    color: #505458;
  }

  .create-btn:hover {
    background-color: #A3E6DE;
    color: white;
    font-weight: bold;
  }

  .comment-btn:hover {
    background-color: #ea9df2;
    color: white;
    font-weight: bold;
  }

  .asign-btn:hover {
    background-color: #c19a6b;
    color: white;
    font-weight: bold;
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
</style>