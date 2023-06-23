@extends('layout/template')
@section('title','Iniciar sesión')
@section('content')

<form action="">
	<h1>
		Iniciar sesion
	</h1>

	<div>
		<label for="">Correo electrónico:</label>
		<input type="email" name="" id="">
	</div>

	<div>
		<label for="">Contraseña:</label>
		<input type="password" name="" id="">
	</div>

	<a href="/dashboard"><input type="button" value="Iniciar sesión"></a>
</form>
<div class="links">
	<a href="/usuarios/recuperarpassword">Recuperar contraseña</a>
	<a href="/usuarios/registro">Registrarse</a>
</div>

<style>
body {
	text-align: center;
}

form {
	margin-top: 10%;
	margin-left: 35%;
	text-align: center;
	justify-content: space-around;
	border: 1px solid black;
	width: 30%;
	height: 30%;
}

form div {

	padding: 10px;
	margin: 10px;
	text-align: right;
}

.links {
	margin-left: 35%;
	width: 30%;
	align-items: center;
}

.links a {
	text-decoration: none;
	color: black;
	margin: 4%;
}
</style>