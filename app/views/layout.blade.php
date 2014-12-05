<html>

	@yield('title')
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,700|Cantarell:400,700,400italic|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	{{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen')) }}
	{{ HTML::style('style.css', array('media' => 'screen')) }}

	<body>

		<nav class="navbar" role="navigation" id="navheader">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Expandir navegação</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" id="logo-mirumbo" href="/"><span>Mi Rumbo</span></a>
				</div><!-- .navbar-header -->

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-user navbar-right">
						@if (Auth::check())
							<li><a href="#">{{ Auth::user()->name }}</a></li>
						@else
							<li><a href="/signup">Login / Registrame</a></li>
						@endif            
					</ul>
					<ul class="nav navbar-nav navbar-left">
						<li><a href="/#QueHay">¿Qué hay por Mi Rumbo?</a></li>
						<li><a href="/#QuieroRumbear">¡Quiero Rumbear!</a></li>
						<li><a href="/quees">¿Qué es Mi Rumbo?</a></li>
						<li><a href="/faq">FAQ</a></li>
					</ul>
					<form class="navbar-form navbar-right">
						<input type="text" class="form-control" placeholder="Quiero buscar...">
					</form>
				</div><!-- #navbar -->
			</div><!-- .container -->
		</nav>

		@yield('slider')

		<div id="content">
	        @yield('content')
			<footer>
				<div class="footer-nav container">
				<div id="footer-mirumbo" class="col-xs-4 col-lg-3">
				<h3>MI RUMBO</h3>
				<ul>
				 <li><a href="/" alt="Home">Inicio</a></li>
				 <li><a href="/quees" alt="Qué es Mi Rumbo">Qué es Mi Rumbo</a></li>
				 <li><a href="/#QueHay">Qué hay por Mi Rumbo</a></li>
				 <li><a href="/projects/create">Quiero Rumbear</a></li>
				 <li><a href="/faq">Perguntas frecuentes</a></li>
				 <li><a href="/signup">Suscripción</a></li>
				</ul>
				</div><!-- #footer-mirumbo -->
				<div id="footer-quepuedo" class="col-xs-4 col-lg-3">
				<h3>QUE PUEDO HACER</h3>
				<ul>
				 <li>Haz una propuesta</li>
				 <li>Revisa una propuesta</li>
				 <li>Vota Proyectos</li>
				 <li>Monitorea Proyectos</li>
				 <li>Evalúa Obras</li>
				</ul>
				</div><!-- #footer-quepuedo -->
				<div id="footer-contacto" class="col-xs-4 col-lg-3">
				<h3>CONTACTO</h3>
				<ul>
				 <li>Directorio</li>
				 <li>Correos</li>
				 <li>Medios</li>
				 <li>Gobierno</li>
				 <li><a href="/blog">Blog</a></li>
				</ul>
				</div><!-- #footer-contacto -->
				<div id="footer-social" class="col-xs-4 col-lg-3">
				<h3>REDES SOCIALES</h3>
				<ul>
				 <li><a href="https://www.facebook.com/pages/Mi-Rumbo/363451403832116" alt="Facebook /MiRumboMX"><i class="icons icon-facebook"></i> Facebook</a></li>
				 <li><a href="https://twitter.com/mirumbomx" alt="Twitter @MiRumboMX"><i class="icons icon-twitter"></i> Twitter</a></li>
				 <li><a href="https://www.youtube.com/user/mirumbomx"><i class="icons icon-youtube"></i> Youtube</a></li>
				</ul>
				</div><!-- #footer-social -->
				<div id="footer-logos">
				<ul>
				 <li id="footer-flip"><a href="http://www.flipmocracy.com/" alt="FLiP">FLIP</a></li>
				 <li id="footer-labic"><a href="http://www.ciudadania20.org/pt-pt/colaboradoreslabicmxpt/" alt="Laboratório Ibero-Americano de Inovação Cidadã">Labic</a></li>
				 <li id="footer-cc"><a href="http://creativecommons.org/licenses/by-nc/4.0/" alt="Creative Commons - Attribution-NonCommercial 4.0 International (CC BY-NC 4.0)">Creative Commons</a></li>
				 <li id="footer-github"><a href="https://github.com/MiRumbo" alt="Github :: MiRumbo">Github</a></li>
				</ul>
				<p>Mi Rumbo es una plataforma abierta de presupuesto participativo propuesta por FLIP y desarrollada en<br /> el Laboratorio Iberoamericano de Innovación Ciudadana #LabICMx (Veracruz 2014).</p>	
				</div>
				</div><!-- .footer-nav -->
				<div id="footer-copy">
				<div class="container">
				<i id="logo-footer"></i>
				<p id="copyright">&copy; 2014 Mi Rumbo O.S.C. - Esta plataforma esta disponível sob licenciamento Creative Commons By-Nc<br /> e esta sendo desenvolvida por <a href="/equipo">muitos colaboradores</a>.</p>
				</div>
				</div>
			</footer>
		</div><!-- #content -->

		<script src="//code.jquery.com/jquery.js"></script>
		{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
		{{ HTML::script('js/common.js') }}
		@yield('scripts')
	 </body>

</html>
