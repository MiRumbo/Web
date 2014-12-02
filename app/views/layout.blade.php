<html>

	@yield('title')
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen')) }}
  {{ HTML::style('css/common.css') }}

   <body>
      
    	<div class="container">
          @if (Auth::check())
            <div id="loggedInUser">{{ Auth::user()->name }}</div>
          @endif
        	<h1>Mi Rumbo</h1>   
        	<h5>Presupuesto Participativo</h5>       
        	@yield('content')
  		</div>

     	<script src="//code.jquery.com/jquery.js"></script>
     	{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
      {{ HTML::script('js/common.js') }}
     	{{ HTML::script('js/projects.js') }}
      {{ HTML::script('js/users.js') }}

   </body>

</html>