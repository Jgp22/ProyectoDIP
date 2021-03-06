@section('title')
	<title>Contacto</title>
@endsection
@extends('plantilla')
@section('content')
        <div class="col-lg-10 container">
		<div id="contacto" class="row">
			<div class="col-sm-11 text-justify">
				<h3>Contacto:</h3>
				<p>Use el siguiente formulario para hacernos llegar sus preguntas, comentarios u observaciones</p>
				<br>
				<form role:"form" action="#" method="post">
					<div class="form-group">
        		<label for="nombre"><span class="glyphicon glyphicon-user"></span> Nombre* </label>
        		<input type="text" class="form-control" id="nombre" placeholder="Introduzca su nombre" data-container="body" required="required">
        	</div>
        	<div class="form-group">
        		<label for="correo"><span class="glyphicon glyphicon-envelope"></span> Correo*</label>
        		<input type="email" class="form-control" id="correo" placeholder="Introduzca su correo" data-container="body" required="required">
        	</div>
        	<div class="form-group">
        		<label for="asunto"><span class="glyphicon glyphicon-pencil"></span> Asunto*</label>
        		<input type="text" class="form-control" id="asunto" placeholder="Introduzca el Asunto" data-container="body" required="required">
        	</div>
        	<div class="form-group">
        		<label for="mensaje"><span class="glyphicon glyphicon-pencil"></span> Mensaje*</label>
        		<textarea class="form-control" rows="3" id="mensaje" placeholder="Introduzca su mensaje" data-container="body" required="required"></textarea>
        	</div>
        	<button type="submit" class="btn btn-primary "><span class="glyphicon glyphicon-inbox"></span> Enviar</button>
				</form>
			</div>
		</div>
	</div>
@endsection