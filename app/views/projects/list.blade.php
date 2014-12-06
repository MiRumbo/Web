@extends('layout')

@section('title')
    <title>Proyectos</title>
@stop

@section('content')
<div class="rumbo-rumberos">
	<div class="container">
		<h2>PROYECTOS</h2>        
        @if ($city_hall != null)
            <h3>Del. {{ $city_hall }}@if ($district != null), Col. {{ $district }}</h3>
            @else
                </h3>
            @endif
        @endif        
        @foreach($projects as $project)
        <div class="col-lg-4 item-proyecto">
            @if ($project->resource != null)
                {{ HTML::image('projects_media/photos/' . $project->resource, 'Foto del proyecto', array('class' => 'thumb-proyecto')) }}
            @else
                {{ HTML::image('projects_media/photos/default.png', 'Foto del proyecto', array('class' => 'thumb-proyecto')) }}
            @endif          
            <h3>{{ $project->title }}</h3>
		    <div class="content-proyecto">
                <p>{{ $project->problem }}</p>
    	        <p class="author"><a href="#profie-author">Por: {{ $project->name }}</a></p>
    	        <p class="local">Del. {{ $project->city_hall }} - Col. {{ $project->district }}</p>
    		    <div class="status-proyecto">
                    <a href="/proyecto/14"><i class="icons icon-category-{{ $project->category_id }}"></i>{{ strtoupper($project->status) }}</a>
    		    </div>
        	</div>
	    </div>
        @endforeach
        @if (count($projects) == 0)
            <p>No hay proyectos en este rumbo</p>
        @endif
    </div>
</div>
@stop