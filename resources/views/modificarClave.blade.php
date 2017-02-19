@section('title')
	<title>Modificar Clave</title>
@endsection
@extends('plantilla')
@section('content')
	<div class="col-lg-10">
		<div class="container form-modificarClave">
			<form action="{{ route('modificarClaveExito') }}">
				<h1>Modificar Clave</h1>
				<br>
				<div class="form-group">
					<label for="Clave"><span class="glyphicon glyphicon-eye-open"></span> Clave:<span class="required"> *</span></label>
					<input type="password" class="form-control" id="clave" placeholder="Introduzca su clave" required="required" pattern="[A-Za-z\s0-9]{8,16}" title="La clave debe posser entre 8 y 16 caracteres">
				</div>
				<div class="form-group">
					<label for="Repita la clave"><span class="glyphicon glyphicon-eye-open"></span> Repita la clave:<span class="required"> *</span></label>
					<input type="password" class="form-control" id="repeClave" placeholder="Repita la Clave" required="required" pattern="[A-Za-z\s0-9]{8,16}" title="La clave debe posser entre 8 y 16 caracteres y debe ser igual al campo anterior">
					<p id='demo'></p>
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-edit"> Modificar</button><br>
				<small>(*) Obligatorio</small>
			</form>
		</div>
	</div>
@endsection