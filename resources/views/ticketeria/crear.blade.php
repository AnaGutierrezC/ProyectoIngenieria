@extends('layout/dashboard-template')
@section('title','Crear ticket')
@section('content')
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script> -->

<div class="content margin-content">
    <h1>
        Crear un ticket
    </h1>
    <form action="{{ url('ticketeria') }}" method="post">
    @csrf
        <div>
            <label for="" >Titulo:</label>
            <input type="text" class="title-inp" id="titulo" name="titulo" value="{{old('titulo')}}"required>
        </div>
        <div>
        <label for="" >Descripción:</label>
        </div>
        <div>
         <textarea class="desc-inp" name="descripcion" id="descripcion" class="descripcion" cols="30" rows="15" value="{{old('descripcion')}}"></textarea>
            <!-- <textarea name="descripcion" id="descripcion" class="descripcion" cols="30" rows="15" value="{{old('descripcion')}}"></textarea> -->
        </div>
     
        <div class="inp-labels">
            <label for="">Prioridad:</label>
            <select name="prioridad" id="prioridad" required>
                <option value=""> No hay prioridad</option>
                <option value=""> Importante</option>
                <option value=""> No muy importante </option>
                </select>
                <label for="">Categoría:</label>
            <select name="categoria" id="categoria" required>
                <option value=""> No hay categoria</option>
                <option value=""> Software</option>
                <option value=""> Hardware </option>
                <option value=""> Inventario </option>
                </select>
                <label for="">Etiqueta:</label>
            <select name="etiqueta" id="etiqueta" required>
                <option value=""> No hay etiqueta</option>
                <option value=""> Software</option>
                <option value=""> Hardware </option>
                <option value=""> Inventario </option>
                </select>
       </div>
     
       <div>
       <button type="submit">Enviar</button>
       </div>
       
    </form>
</div>
<style>
    form{ 
        margin-top: 10px;
        justify-content: space-around;
        border: 1px solid black;
        width: 100%;
        height: 50%;
    }
    form label{
        font-size: 1rem;
    }
    form div{
        margin: 20px;
    }
    form button{
        margin-left:84%;
        width: 200px;
        height: 30px;
        border-radius: 10px;
    }
    
    .title-inp{
        margin-left: 50px;
        width: 800px;
        border-radius: 5px;
        font-size: 1rem;
        padding-inline: 0.7em;
        outline: none;
        padding: 10px;        
    }
   
    .archiv-inp{
        margin-left: 30px;

    }

    .inp-labels label{
        margin:3.5%;    
    }
    
    form select{
       padding: 3.5px;
        border-radius: 5px;
    }

</style>

<!-- <script>
        ClassicEditor
            .create( document.querySelector( '#descripcion' ) )
            .catch( error => {
                console.error( error );
            } );
</script> -->