@extends('layout')

@section('title')
	<title>Registro de Ciudadano</title>
@stop

@section('content')
<div class="row center">
   <div class="col-md-6 col-md-offset-3">      
      {{ Form::open(array('url' => 'signup')) }}
         <legend>Registro de Ciudadano</legend>
         @include('base-create-user')
         <button type="submit" class="btn btn-default">Registrarse</button>
      {{ Form::close() }}
   </div>
</div>    
@stop