@extends('layout')

@section('title')
	<title>MiRumbo.org - Equipo </title>
@stop

@section('content')
	<div class="rumbo-page">
		<div class="container">
			<h2>Equipo</h2>
<center>
			<img src="/images/equipo.png" />
</center>
		</div><!-- .container -->
	</div><!-- .rumbo-page -->
@stop

@section('scripts')   
   {{ HTML::script('js/home.js') }}
@stop
