<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del usuario</title>
</head>
<body>
    <h1>Detalles del usuario</h1>
    <div>
    <h1>
        Usuarios registrados 
    </h1>
   <table>
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Rol</th>
    </thead>

    <tbody>
        
      
       <tr>
        <?php
        
        ?>
       @foreach($name AS $item)
        <td>{{$item->usu_id}}</td>
        <td>{{$item->usu_nom}}</td>
        <td>{{$item->usu_correo}}</td>
        <td>{{$item->rol}}</td>
       </tr>
       @endforeach
    </tbody>
   </table>
    </div>
</body>
</html>