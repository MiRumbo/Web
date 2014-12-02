@extends('layout')

@section('title')
	<title>Home</title>
@stop

@section('slider')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
          <li class="active" data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li class="" data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active left">
            <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTE0MCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMTQwIDUwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjxnPjx0ZXh0IHg9IjQwMi41IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiM1NTU7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NTNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj5GaXJzdCBzbGlkZTwvdGV4dD48L2c+PC9zdmc+" data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide [1140x500]">
          </div>
          <div class="item next left">
            <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTE0MCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMTQwIDUwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjxnPjx0ZXh0IHg9IjM1Mi41IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiM0NDQ7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NTNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj5TZWNvbmQgc2xpZGU8L3RleHQ+PC9nPjwvc3ZnPg==" data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide [1140x500]">
          </div>
          <div class="item">
            <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTE0MCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMTQwIDUwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjxnPjx0ZXh0IHg9IjM5MSIgeT0iMjUwIiBzdHlsZT0iZmlsbDojMzMzO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjUzcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9nPjwvc3ZnPg==" data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide [1140x500]">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
@stop

@section('content')
	<div class="row rumbo-mejora">
		<div class="container">
			<h2>ÚNETE Y MEJORA TU RUMBO</h2>

			<ul class="col-md-6">
				<li>1. HAZ TU PROPUESTA</li>
				<li>2. COLABORA Y HAZLO UN PROYECTO</li>
				<li>3. COMPARTE TU PROYECTO</li>
				<li>4. VOTA POR OTROS PROYECTOS</li>
				<li>5. MONITOREA</li>
				<li>6. ¡TU RUMBO MEJORA!</li>
			</ul>
		</div><!-- .container -->
	</div><!-- .rumbo-mejora -->
	<div class="row rumbo-proyectos">
		<div class="container">
			<h2 class="rumbo-heading">¿QUÉ PROYECTOS HAY POR MI RUMBO?</h2>
			<div class="row">
<!-- FIXME -->
<div class="form-group form-inline">	
	<select class="form-control" id="inputCityHall" name="cityHall">
		<option data-id="-1">-- Seleccione una delegación --</option>
		        	<option data-id="1">Miguel Hidalgo</option>
    	        	<option data-id="2">Cuauhtémoc</option>
    	        	<option data-id="3">Venustiano Carranza</option>
    	        	<option data-id="4">Coyoacán</option>
    	        	<option data-id="5">Iztapalapa</option>
    	        	<option data-id="6">Milpa Alta</option>
    		</select>
	<select class="form-control" id="inputDistrict" name="district" disabled="">
		<option value="-1">-- Seleccione un distrito --</option>
	</select>
</div>	
<!-- FIXME -->
			</div>
       			 <div class="row">
       			 	<button type="button" class="btn btn-lg btn-default">UBICAR</button>
       			 </div>
	</div><!-- .container -->
      </div><!-- .rumbo-proyectos -->

      <div class="row rumbo-rumbear">
	<div class="container">
          <h2 class="rumbo-heading">¡QUIERO RUMBEAR!</h2>
	 <div class="col-md-6 col-md-offset-3">
	  <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Datos de tu propuesta</h3>
            </div>
            <div class="panel-body">
		<div class="panel-rubro">
			<ul>
			 <li>EQUIPAMIENTO</li>
			 <li>Outro</li>
			</ul>
		</div>
		<div class="panel-form">
<!-- FIXME -->
<div class="form-group form-inline">
	<div class="row">
		<label for="inputName">Nombre de la propuesta</label>
		<input class="form-control" id="inputName" name="name" type="text">
	</div>	
	<div class="row">
	<select class="form-control" id="inputCityHall" name="cityHall">
		<option data-id="-1">-- Seleccione una delegación --</option>
		        	<option data-id="1">Miguel Hidalgo</option>
    	        	<option data-id="2">Cuauhtémoc</option>
    	        	<option data-id="3">Venustiano Carranza</option>
    	        	<option data-id="4">Coyoacán</option>
    	        	<option data-id="5">Iztapalapa</option>
    	        	<option data-id="6">Milpa Alta</option>
    	</select>
	</div>
	<div class="row">
	<select class="form-control" id="inputDistrict" name="district" disabled="">
		<option value="-1">-- Seleccione un distrito --</option>
	</select>
	</div>
	 <div class="row">
	 	<button type="button" class="btn btn-lg btn-default">CUÉNTANOS+</button>
	 </div>
</div>	
<!-- FIXME -->
		</div><!-- .panel-form -->
            </div>
          </div><!-- .panel -->          
        </div>
	</div><!-- .container -->
      </div><!-- .rumbo-rumbear -->

      <div class="row rumbo-rumberos">
	<div class="container">
        <div class="col-lg-4">
          <img class="img" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Foto de mi parquecito" style="width: 140px; height: 140px;">
          <h2>MI PARQUECITO</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p class="author"><a href="#profie-author">Por: Joel Rodríguez</a></p>
          <p class="local">Del. Miguel Hidalgo - Col. Polanco</p>
	  <p><a class="btn btn-default" href="#" role="button">¡COMPLETADO!</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Foto de mi parquecito" style="width: 140px; height: 140px;">
          <h2>PUENTE PA TODOS</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p class="author"><a href="#profie-author">Por: Marcela Brasil</a></p>
          <p class="local">Del. Azcapotzalco</p>
	  <p><a class="btn btn-default" href="#" role="button">¡COMPLETADO!</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Foto de mi parquecito" style="width: 140px; height: 140px;">
          <h2>¡LUCES Y LUCES!</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p class="author"><a href="#profie-author">Por: Joel Rodríguez</a></p>
          <p class="local">Del. Miguel Hidalgo - Col. Polanco</p>
	  <p><a class="btn btn-default" href="#" role="button">¡COMPLETADO!</a></p>
        </div><!-- /.col-lg-4 -->
	</div><!-- .container -->
      </div><!-- .rumbo-rumberos -->

@stop
