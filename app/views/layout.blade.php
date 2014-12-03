<html>

	@yield('title')
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,700|Cantarell:400,700,400italic|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	{{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen')) }}
	{{ HTML::style('style.css', array('media' => 'screen')) }}

	<body>

		<nav class="navbar" role="navigation">
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
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::check())
							<li><a href="#">{{ Auth::user()->name }}</a></li>
						@else
							<li><a href="/signup">Login / Registrame</a></li>
						@endif            
					</ul>
					<ul class="nav navbar-nav navbar-left">
						<li><a href="#">¿Qué hay por Mi Rumbo?</a></li>
						<li><a href="#">¡Quiero Rumbear!</a></li>
						<li><a href="#">Contáctanos</a></li>
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
				<p id="copyright">&copy; 2014 Mi Rumbo O.S.C.</p>
			</footer>
		</div><!-- #content -->

		<script src="//code.jquery.com/jquery.js"></script>
		{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
		{{ HTML::script('js/utils.js') }}
		@yield('scripts')
	 </body>

</html>
