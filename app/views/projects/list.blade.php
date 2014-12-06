@extends('layout')

@section('title')
    <title>Proyectos</title>
@stop

@section('content')
<div class="rumbo-rumberos">
	<div class="container">
		<h2>PROYECTOS</h2>
        @foreach($projects as $project)
        <div class="col-lg-4 item-proyecto">
            @if ($project->resource != null)
                {{ HTML::image('projects_media/photos/' . $project->resource, 'Foto del proyecto', array('class' => 'thumb-proyecto')) }}
            @else
                {{ HTML::image('projects_media/photos/default.png', 'Foto del proyecto', array('class' => 'thumb-proyecto')) }}
            @endif  
            
            <!-- <img class="thumb-proyecto" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Foto de mi parquecito"> -->
            <h3>{{ $project->title }}</h3>
		    <div class="content-proyecto">
        	   <p><b>Problema: </b>{{ $project->problem }}</p>
               <p><b>Solución: </b>{{ $project->problem }}</p>
        	   <p class="author"><a href="#profie-author">Por: {{ $project->name }}</a></p>
        	   <p class="local">Del. {{ $project->city_hall }} - Col. {{ $project->district }}</p>
    		    <div class="status-proyecto">
                    <a href="/proyecto/14"><i class="icons icon-obras"></i>{{ strtoupper($project->status) }}</a>
    		    </div>
        	</div>
	    </div>
        @endforeach
    </div>
</div>
@stop