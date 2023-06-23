@extends('layout/dashboard-template')
@section('title','Dashboard')
@section('content')

<div class="content flex">
  <div class="usuarios-registrados">
    <a href="/usuarios">
     
        <h2>Usuarios Registrados</h2> 
    
    </a>
  </div>
  <div class="tickets">
      <a href="/ticketeria">
        <h2>Tickets</h2>
      </a>
  </div>
  <div class="registro-actividad">
        <h2>Registro de Actividad (Logs)</h2>
   </div>
  <div class="roles">
        <a href="/usuarios/listaroles"><h2>Roles</h2></a>
  </div>
</div>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

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

  .content-box {
    width: 23%;
    height:10%;
    background-color:white;
  }
  
</style>