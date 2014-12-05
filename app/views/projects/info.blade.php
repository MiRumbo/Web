@extends('layout')

@section('title')
	<title>{{ $project->title }}</title>   
@stop

@section('content')
<div class="rumbo-page {{ $project->status }}">
<div class="container" id="page-project">
	<legend>{{ $project->title }}</legend>
	{{ HTML::image('projects_media/photos/' . $project->resource) }}
	<div><b>Ubicación: </b>{{ trim($project->district) . ', ' . $project->city_hall}}</div>
	<div><b>Categoría: </b>{{ $project->category }}</div>
	<div><b>Problema: </b>{{ $project->problem }}</div>
	<div><b>Solución: </b>{{ $project->solution }}</div>
	<div><b>Costo: </b>
		@if ($project->cost > 0)
			{{ $project->cost }}
		@else
			<i>No especificado</i>
		@endif
	</div>
	<div><b>Beneficiarios: </b>
		@if ($project->beneficiaries != "")
			{{ $project->beneficiaries }}
		@else
			<i>No especificado</i>
		@endif
	</div>
	<div><b>Estado: </b>{{ $project->status }}</div>
	<div><b>Creado por: </b>{{ $project->username }}</div>
</div>
</div><!-- #page-project -->
@stop
