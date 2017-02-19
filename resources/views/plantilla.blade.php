<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        @yield('title')
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="img/logo-mini.ico">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styleIcoMoon.css') }}">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        @include('errors.errors')
	    <div class="container-membrete">
	    	<div class="row">
	    		<div class="col-xs-6 col-sm-8 col-md-8 col-lg-8 text-left"><img src="img/minis.png" width="70%" height="45%" alt="Ministerio del Poder Popular para la Educación Universitaria, Ciencia y Tecnología"></div>
		    	<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 text-right"><img src="img/bicen.png" width="35%" height="75%" alt="Logo de 200 años de liberación"></div>
	    	</div>
		    <div class="row">
		    	<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 container-logo-iut">
		    		<a href="http://iutfrp.edu.ve/" target="_blank"><img src="img/logo.png" width="100" height="85" alt="Instituto Universitario de Tecnología 'Dr. Federico Rivero Palacio'""></a>
		    	</div>
		    	<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 container-logo-dep">
		    		<a href="{{ route('inicio') }}"><img src="img/logoDIPIUT1-1.png" width="150" height="85" alt="Departamento de Investigación y Postgrado"></a>
		    	</div>
		    	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 container-nombre">
		    		<h4>Instituto Universitario de Tecnología "Dr. Federico Rivero Palacio"</h4>
		    		<h3>Departamento de Investigación y Postgrado</h3>
		    	</div>
		    </div>
	    </div>
		
		<div class="container-barra">
			<div class="hidden-xs">
				<ul class="nav nav-pills nav-justified">
					<li class="dropdown">
						<a href="#" class="link dropdown-toggle" data-toggle="dropdown"><h6>¿Quiénes Somos? <span class="caret"></span></h6></a>
						<ul class="dropdown-menu">
							<li><a href="quienSomos#mision" class="link"><h6>Misión</h6></a></li>
							<li><a href="quienSomos#vision" class="link"><h6>Visión</h6></a></li>
							<li><a href="quienSomos#estructuraOrganizativa" class="link"><h6>Estructura Organizativa</h6></a></li>
						</ul>
					</li>
					<li><a href="{{ route('noticias') }}" class="link"><h6>Noticias</h6></a></li>
					<li><a href="{{ route('postgrado') }}" class="link"><h6>Postgrado</h6></a></li>
					<li><a href="{{ route('evento') }}" class="link"><h6>Eventos</h6></a></li>
					<li><a href="{{ route('investigacion') }}" class="link"><h6>Investigación</h6></a></li>
					<li><a href="{{ route('pregrado') }}" class="link"><h6>Pregrado</h6></a></li>
					<li><a href="{{ route('contacto') }}" class="link"><h6>Sugerencias</h6></a></li>
					<li class="active"><a href="#" class="link" data-toggle="modal" data-target='#login'><h6>Iniciar Sesión</h6></a></li>
				</ul>
			</div>	

			<nav class="navbar navbar-default hidden-xl hidden-lg hidden-md hidden-sm">
				<div class="container-fluid">
					<div class="navbar-header">
						<button class="navbar-toggle" data-toggle="collapse" data-target="#BM">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="BM">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">¿Quiénes Somos? <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('mision') }}" class="link"><h6>Misión</h6></a></li>
									<li><a href="{{ route('vision') }}" class="link"><h6>Visión</h6></a></li>
									<li><a href="{{ route('estrucOrg') }}" class="link"><h6>Estructura Organizativa</h6></a></li>
								</ul>
							</li>
							<li><a href="{{ route('noticias') }}" class="link"><h6>Noticias</h6></a></li>
							<li><a href="{{ route('postgrado') }}" class="link"><h6>Postgrado</h6></a></li>
							<li><a href="#" class="link"><h6>Eventos</h6></a></li>
							<li><a href="{{ route('investigacion') }}" class="link"><h6>Investigación</h6></a></li>
							<li><a href="{{ route('pregrado') }}" class="link"><h6>Pregrado</h6></a></li>
							<li><a href="{{ route('contacto') }}" class="link"><h6>Sugerencias</h6></a></li>
							<li class="active"><a href="#" class="link" data-toggle="modal" data-target='#login'><h6>Iniciar Sesión</h6></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>

		<div class="modal fade" id="login" role="dialog">
    		<div class="modal-dialog">
      			<div class="modal-content">
        			<div class="modal-header" style="padding:35px 50px;">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4><span class="glyphicon glyphicon-lock"></span> Ingresar al Sistema<br>(DIPIUT)</h4>
        			</div>
        			<div class="modal-body" style="padding:40px 50px;">
        				
	          			<form role="form" method="POST" action="{{ route('login.store') }}">
    						<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            			<div class="form-group">
	              				<label for="correo"><span class="glyphicon glyphicon-user"></span> Correo</label>
	              				<input type="text" name="correo" class="form-control" id="correo" placeholder="Introduzca su correo" data-container="body" required="required">
	            			</div>
	            			<div class="form-group">
	              				<label for="contraseña"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
	              				<input type="password" name="password" class="form-control" id="contraseña" placeholder="Introduzca su contraseña" data-container="body" required="required">
	            			</div>
	            			<div class="checkbox">
	              				<label><input type="checkbox" value="true" checked>Recuerdame</label>
	            			</div>
	              			<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Ingresar</button>
	          			</form>
        			</div>
        			<div class="modal-footer">
          				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          				<p><a href="{{ route('registro') }}">Registarse</a></p>
          				<p><a href="{{ route('olvidoClave') }}">¿Olvidó la contraseña?</a></p>
        			</div>
      			</div>
    		</div>
  		</div>

		<div class="row">
			@yield('content') <!-- Contenido de la página -->
			<div class="col-lg-2 offset-lg-2">
				<div class="container-enlace">
					<h3>Enlaces</h3>
					<a href="http://iutfrp.edu.ve/" target="_blank"><img src="img/logo.png" width="110" height="95" style="margin-top: 10%;"><br>IUT</a><br>
					<a href="#" target="_blank"><img src="img/extension.jpg" width="110" height="95" style="margin-top: 30%;"><br>Extensión</a><br>
					<a href="#" target="_blank"><img src="img/controlEstudios.jpg" width="110" height="95" style="margin-top: 30%;"><br>Control de estudio</a>	
				</div>
			</div> 	
		</div>

		<div class="container-info">
			<div class="info-size">
				<ul class="nav nav-pills nav-justified zoom">
					<li><a href="{{ route('quienSomos') }}"><img src="img/qs4-1.png" alt="¿Quiénes Somos?"><br>¿Quiénes Somos?</a></li>
					<li><a href="{{ route('noticias') }}"><img src="img/noticias5-1.png" alt="Noticias"><br>Noticias</a></li>
					<li><a href="{{ route('postgrado') }}"><img src="img/post2-1.png" alt="Postgrado"><br>Postgrado</a></li>
				</ul>
				<ul class="nav nav-pills nav-justified zoom">
					<li><a href="{{ route('evento') }}"><img src="img/even6-1.png" alt="Eventos"><br>Eventos</a></li>
					<li><a href="{{ route('investigacion') }}"><img src="img/inv1-1.png" alt="Investigación"><br>Investigación</a></li>
					<li><a href="{{ route('pregrado') }}"><img src="img/pre3-1.png" alt="Pregrado"><br>Pregrado</a></li>
				</ul>
				<ul class="nav nav-pills nav-justified zoom">
					<li><a href="{{ route('contacto') }}"><img src="img/suge1-1.png" alt="Sugerencias"><br>Sugerencias</a></li>
					<li><a href="#" data-toggle="modal" data-target="#login"><img src="img/login1-1.png" alt="Iniciar Sesión"><br>Iniciar Sesión</a></li>
				</ul>
			</div>		
		</div>

		<footer>
			<div class="hidden-xs footer">
				<div class="row">
					<div class="col-sm-3 col-md-2 col-lg-2 border-right">
						<a href="quienSomos#estructuraOrganizativa" class="link">Estructura Organizativa</a><br>
						<a href="quienSomos#mision" class="link">Misión</a><br>
						<a href="quienSomos#vision" class="link">Visión</a><br>
					</div>
					<div class="col-sm-3 col-md-2 col-lg-2 border-right">
						<a href="{{ route('investigacion') }}" class="link">Investigación</a><br>
						<a href="{{ route('noticias') }}" class="link">Noticias</a><br>
						<a href="{{ route('evento') }}" class="link">Eventos</a><br>
					</div>
					<div class="hidden-sm col-md-4 col-lg-4">
						<a href="http://iutfrp.edu.ve/" target="_blank"><img src="img/logo.png" width="150" height="110" alt="Instituto Universitario de Tecnología 'Dr. Federico Rivero Palacio'"></a>
					</div>
					<div class="col-sm-3 col-md-2 col-lg-2 border-left">
						<a href="{{ route('pregrado') }}" class="link">Pregrado</a><br>
						<a href="{{ route('postgrado') }}" class="link">Postgrado</a><br>
						<a href="{{ route('contacto') }}" class="link">Sugerencias</a><br>
					</div>
					<div class="col-sm-3 col-md-2 col-lg-2 border-left">
						<h5>I.U.T. Dr. Federico Rivero Palacio, Km 8, Carretera Panamericana, Caracas, Venezuela (212)681.24.28, 681.16.89</h5>
						<h5>Departamento de Investigación y Postgrado, Edificio Central, Piso 2</h5>
					</div>
				</div>
				<div class="border-top">
					<small>
					 ©2017 Instituto Universitario de Tecnologia "Dr. Federico Rivero Palacio" <br>
					<a href="{{ route('creadores') }}" class="link"> Creadores <span class="glyphicon glyphicon-flag"></span></a>
				</small>
				</div>
			</div>
			<div class="row footer hidden-xl hidden-lg hidden-md hidden-sm">
				<div class="col-xs-6">
					<a href="quienSomos#mision" class="link">Misión</a><br>
					<a href="quienSomos#vision" class="link">Visión</a><br>
					<a href="{{ route('postgrado') }}" class="link">Postgrado</a><br>
					<a href="{{ route('pregrado') }}" class="link">Pregrado</a><br>
					<a href="{{ route('noticias') }}" class="link">Noticias</a><br>
				</div>
				<div class="col-xs-6 border-left">
					<h5>I.U.T. Dr. Federico Rivero Palacio, Km 8, Carretera Panamericana, Caracas, Venezuela (212)681.24.28, 681.16.89</h5>
					<h5>Departamento de Investigación y Postgrado, Edificio Central, Piso 2</h5>
				</div>
			</div>
			<div class="footer border-top hidden-xl hidden-lg hidden-md hidden-sm">
				<small>
					 ©2017 Instituto Universitario de Tecnologia "Dr. Federico Rivero Palacio" <br>
				<a href="{{ route('creadores') }}" class="link"> Creadores <span class="glyphicon glyphicon-flag"></span></a>
			</small>
			</div>
	  	</footer>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
