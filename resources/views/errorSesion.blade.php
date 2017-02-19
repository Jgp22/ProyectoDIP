@section('title')
	<title>Error al ingresar</title>
@endsection
@extends('plantilla')
@section('content')
	<div class="col-lg-10">
		<div class="container form-modificarClave">
			<form action="modificarClaveExito.html">
				<h1>¡Por favor ingrese al sistema!</h1>
				<h4 class="mensajeOlvidoClave">Para acceder a esta información usted primero debe acceder al sistema. Por favor haga click <a href="#" class="link" data-toggle="modal" data-target='#login' id="ingresar">aquí</a> para acceder.</h4>
		</div>
	</div>
@endsection