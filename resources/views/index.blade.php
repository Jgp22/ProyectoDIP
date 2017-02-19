@section('title')
	<title>IUT Dr. "FRP" Departamento de Investigación y Postgrado</title>
@endsection
@extends('modalPrincipal')
@extends('plantilla')
@section('content')
	<div class="col-lg-10"> <!-- Contenido de la página -->
		<div class="carousel slide slide-size container-fluid" id="miSlider" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#miSlider" data-slide-to="0" class="active"></li>
				<li data-target="#miSlider" data-slide-to="1"></li>
				<li data-target="#miSlider" data-slide-to="2"></li>
			</ol>
				
			<div class="carousel-inner">
				<div class="item active">
					<img src="img/1.jpg" alt="primera">
					<div class="carousel-caption">
						<a href="#"><h1 class="hidden-xs">Título Prueba</h1></a>
						<a href="#"><h4 class="hidden-sm hidden-md hidden-lg">Título Prueba</h4></a>
						<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quam ea, ullam distinctio perspiciatis nemo, aliquid id</p>
					</div>
				</div>
				<div class="item">
					<img src="img/2.jpg" alt="segunda">
					<div class="carousel-caption">
						<a href="#"><h1 class="hidden-xs">Título Prueba</h1></a>
						<a href="#"><h4 class="hidden-sm hidden-md hidden-lg">Título Prueba</h4></a>
						<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quam ea, ullam distinctio perspiciatis nemo, aliquid id</p>
					</div>
				</div>
				<div class="item">
					<img src="img/3.jpg" alt="tercera">
					<div class="carousel-caption">
						<a href="#"><h1 class="hidden-xs">Título Prueba</h1></a>
						<a href="#"><h4 class="hidden-sm hidden-md hidden-lg">Título Prueba</h4></a>
						<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quam ea, ullam distinctio perspiciatis nemo, aliquid id</p>
					</div>
				</div>
			</div>
			<a href="#miSlider" class="carousel-control left" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a href="#miSlider" class="carousel-control right" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>
@endsection