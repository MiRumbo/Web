@extends('layout')

@section('title')
	<title>{{ $project->title }}</title>   
@stop

@section('content')
<div class="container">
	<legend>{{ $project->title }}</legend>
	{{ HTML::image('projects_media/photos/' . $project->photo) }}
	<div><b>Ubicación: </b>{{ trim($project->district->district) . ', ' . $project->city_hall->city_hall}}</div>
	<div><b>Categoría: </b>{{ $project->category->category }}</div>
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
	<div><b>Estado: </b>{{ $project->status->status }}</div>
</div>
@stop