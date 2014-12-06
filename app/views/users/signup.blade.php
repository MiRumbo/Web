@extends('layout')

@section('title')
	<title>Registro de Ciudadano</title>
@stop

@section('content')
<div class="rumbo-page">
<div class="container" id="page-signup">

<h2>Registro de Ciudadano y Ingreso</h2>

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="singbox" class="active"><a href="#signup" aria-controls="signup" role="tab" data-toggle="tab">Registro de Ciudadano</a></li>
    <li role="singbox"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Ingreso</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="signup">
<div class="row center">
	<div class="col-md-6 col-md-offset-3">      
	 	{{ Form::open(array('url' => 'signup', 'id' => 'signupForm')) }}
			<legend>Registro de Ciudadano</legend>
			@include('users.create')
			<button type="submit" class="btn btn-default">Registrarse</button>
	  	{{ Form::close() }}
   	</div>
</div><!-- .row signup -->    


	</div><!-- #signup -->
	<div role="tabpanel" class="tab-pane" id="login">
	@include('users.signin')
	</div><!-- #login -->
  </div>

</div>

</div><!-- .container -->
</div><!-- #page-signup -->    
@stop

@section('scripts')
	{{ HTML::script('js/users.js') }}
@stop
