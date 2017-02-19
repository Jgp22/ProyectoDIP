@section('title')
	<title>Recuperar contraseña</title>
@endsection
@extends('plantilla')
@section('content')
	<div class="col-lg-10">
		<div class="container form-olvidoClave">
			<form action="{{ route('confirmarCorreo') }}">
				<h1>¿Olvidaste tu contraseña?</h1>
				<br>
				<h4>Ingresa aquí tu correo electrónico</h4>
				<div class="form-group">
					<label for="Correo"><span class="glyphicon glyphicon-envelope"></span> Correo:<span class="required"> *</span></label>
					<input type="email" class="form-control" id="correo" placeholder="Introduzca su correo" autofocus="autofocus" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Ej: ejemplo@dominio.com">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-edit"> Restablecer</button><br>
				<small>(*) Obligatorio</small>
			</form>
		</div>
	</div>
@endsection