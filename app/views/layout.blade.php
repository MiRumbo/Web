<html>

	@yield('title')
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,700|Cantarell:400,700,400italic|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	{{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen')) }}
	{{ HTML::style('style.css', array('media' => 'screen')) }}

   <body>

    	<div class="container">
        	<h1>Mi Rumbo</h1>   
        	<h5>Presupuesto Participativo</h5>       
        	@yield('content')
  		</div>

     	<script src="//code.jquery.com/jquery.js"></script>
     	{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
     	{{ HTML::script('js/projects.js') }}
      {{ HTML::script('js/users.js') }}

   </body>

</html>
