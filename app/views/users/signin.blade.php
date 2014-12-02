@extends('layout')

@section('title')
	<title>Ingreso</title>
@stop

@section('content')
<div class="row center">
   <div class="col-md-4 col-md-offset-4">      
      {{ Form::open(array('url' => 'signin', 'id' => 'signinForm')) }}
         <legend>Ingreso</legend>
         <div class="form-group">
			<label for="inputEmail">Correo electrónico</label>
			<input type="email" class="form-control" id="inputEmail" name="email">
		</div>
		<div class="form-group">
			<label for="inputPassword">Constraseña</label>
			<input type="password" class="form-control" id="inputPassword" name="password">
		</div>
         <button type="submit" class="btn btn-default">Ingresar</button>
      {{ Form::close() }}
   </div>
</div>    
@stop