@extends('layout')

@section('title')
	<title>MiRumbo.org - ¿Qué es Mi Rumbo? </title>
@stop

@section('content')
	<div class="rumbo-page">
		<div class="container" id="page-quees">
			<h2>¿Qué es Mi Rumbo?</h2>

			<img src="/images/quees.png" width="100%" />

		</div><!-- .container -->
	</div><!-- .rumbo-page -->
@stop

@section('scripts')   
   {{ HTML::script('js/home.js') }}
@stop
