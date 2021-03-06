@section('title')
	<title>Noticas</title>
@endsection
@extends('plantilla')
@section('content')
	<div class="col-lg-10 container"> <!-- Contenido de la página -->
		<ul class="pagination">
        	<li><a href="#">&laquo;</a></li>
        	<li class="active"><a href="#">1</a></li>
        	<li><a href="#">2</a></li>
        	<li><a href="#">3</a></li>
        	<li><a href="#">4</a></li>
        	<li><a href="#">5</a></li>
        	<li><a href="#">&raquo;</a></li>
        </ul>
		<div id="noticia" class="row">
			<div class="text-justify">
				<div>
					<h3>Noticias</h3>
				</div>
				<br>
				<br>
				<div class="media-left" >
					<a class="pull-left" href="#">
						<img class"media-object" src="img/noticias5-1.png" alt="Noticias" style="width:120px; padding: 5% 5%;">
					</a>
					<div class="media-body" >
						<br>
						<h4 class="media-heading"><b>Titulo de la noticia</b></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						<a href="{{ route('masNoticias') }}">...<ins>Seguir leyendo</ins></a>
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
		<div id="noticia" class="row">
			<div class="text-justify">
				<div class="media-left" >
					<a class="pull-left" href="#">
						<img class"media-object" src="img/noticias5-1.png" alt="Noticias" style="width:120px; padding: 5% 5%;">
					</a>
					<div class="media-body" >
						<br>
						<h4 class="media-heading"><b>Titulo de la noticia</b></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						<a href="{{ route('masNoticias') }}">...<ins>Seguir leyendo</ins></a>
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
		<div id="noticia" class="row">
			<div class="text-justify">
				<div class="media-left" >
					<a class="pull-left" href="#">
						<img class"media-object" src="img/noticias5-1.png" alt="Noticias" style="width:120px; padding: 5% 5%;">
					</a>
					<div class="media-body" >
						<br>
						<h4 class="media-heading"><b>Titulo de la noticia</b></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						<a href="{{ route('masNoticias') }}">...<ins>Seguir leyendo</ins></a>
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
		<ul class="pagination">
        	<li><a href="#">&laquo;</a></li>
        	<li class="active"><a href="#">1</a></li>
        	<li><a href="#">2</a></li>
        	<li><a href="#">3</a></li>
        	<li><a href="#">4</a></li>
        	<li><a href="#">5</a></li>
        	<li><a href="#">&raquo;</a></li>
        </ul>
	</div>
@endsection