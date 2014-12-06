@extends('layout')

@section('title')
	<title>{{ $project->title }}</title>   
@stop

@section('content')
<div class="rumbo-mejora {{ $project->status }}">
	<div class="container">
	<div id="title-project" class="{{ $project->category }} col-sm-8"> 
		<h2>{{ $project->title }}</h2>
		<span class="local-project">{{ trim($project->district) . ', ' . $project->city_hall}}</span>
	</div><!-- #title-project -->
	</div><!-- .container -->
<div class="container" id="page-project">

<div class="col-sm-8">
	<h3>PROBLEMA</h3>
	<p>{{ $project->problem }}</p>
	<div id="banner-project">
	{{ HTML::image('projects_media/photos/' . $project->resource) }}
	</div>
	<h3>SOLUCIÓN</h3>
	<p>{{ $project->solution }}</p>
	<h3>COSTO (en pesos)</h3>
	<p>	@if ($project->cost > 0)
			{{ $project->cost }}
		@else
			<i>No especificado</i>
		@endif
	</p>
	<h3>BENEFICIARIOS</h3>
	<p>
		@if ($project->beneficiaries != "")
			{{ $project->beneficiaries }}
		@else
			<i>No especificado</i>
		@endif
	</p>
</div>
<div class="col-sm-3 col-sm-offset-1">
	<h3>CREADO POR:</h3>
	<p>{{ $project->username }}</p>
	<h3>RUBRO:</h3>
	<p>{{ $project->category }}</p>
	<h3>ESTATUS:</h3>
	<p>{{ $project->status }}</p>
</div>
</div><!-- #page-project -->
</div><!-- #rumbo-mejora -->
@stop
