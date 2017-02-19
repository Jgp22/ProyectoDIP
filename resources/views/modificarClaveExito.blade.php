@section('title')
	<title>Clave modificada</title>
@endsection
@extends('plantilla')
@section('content')
	<div class="col-lg-10">
		<div class="container form-modificarClave">
			<form action="modificarClaveExito.html">
				<h1>¡Modificación exitosa!</h1>
				<h4 class="mensajeOlvidoClave">Su clave para el ingreso al sistema fue modificada satisfactoriamente, ahora podrá <a href="#" class="link" data-toggle="modal" data-target='#login' id="ingresar">ingresar</a> al sistema con normalidad</h4>
		</div>
	</div>
@endsection