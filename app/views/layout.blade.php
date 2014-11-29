<html>

	@yield('title')
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen')) }}

   <body>

    	<div class="container">
        	<h1>Mi Rumbo</h1>   
        	<h5>Presupuesto Participativo</h5>       
        	@yield('content')
  		</div>

     	<script src="//code.jquery.com/jquery.js"></script>
     	{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
     	{{ HTML::script('js/projects.js') }}

   </body>

</html>