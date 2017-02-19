@section('title')
	<title>Registro exitoso</title>
@endsection
@extends('plantilla')
@section('content')
	<div class="col-lg-10">
		<div class="container form-modificarClave">
			<form action="modificarClaveExito.html">
				<h1>¡Registro exitoso!</h1>
				<h4 class="mensajeOlvidoClave">Su registro fue llevado satisfactoriamente, ahora podrá <a href="#" class="link" data-toggle="modal" data-target='#login' id="ingresar">ingresar</a> al sistema. ¡Bienvenido!</h4>
		</div>
	</div>
@endsection