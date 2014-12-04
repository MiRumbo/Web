@extends('layout')

@section('title')
	<title>Home</title>
@stop

@section('slider')
<div class="container">
<div id="carousel-home" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-home" data-slide-to="0" class=""></li>
          <li class="active" data-target="#carousel-home" data-slide-to="1"></li>
          <li class="" data-target="#carousel-home" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active left">
            <img data-holder-rendered="true" src="/images/slide01.jpg" alt="El presupuesto participativo es de todos. Participemos!" />
          </div>
          <div class="item next left">
            <img data-holder-rendered="true" src="/images/slide02.jpg" alt="Más del 50% de los chilangos participamos en facebook. Menos del 2% de los chilangos participamos en nuestro presupuesto." />
          </div>
          <div class="item">
            <img data-holder-rendered="true" src="/images/slide03.jpg" alt="En el D.F. contamos con más de $760 millones de pesos en presupuesto participativo" />
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div><!-- .container -->

@stop

@section('content')
	<div class="rumbo-mejora">
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
	<a name="QueHay"></a>
	<div class="rumbo-proyectos">
		<div class="container">
			<h2>¿QUÉ PROYECTOS HAY POR MI RUMBO?</h2>
			<div class="col-md-8 col-md-offset-2">
<!-- FIXME -->
<div class="form-group form-inline">	
	<select class="selectpicker" data-style="btn-primary" id="inputCityHall" name="cityHall">
		<option data-id="-1">-- Seleccione una delegación --</option>
		        	<option data-id="1">Miguel Hidalgo</option>
    	        	<option data-id="2">Cuauhtémoc</option>
    	        	<option data-id="3">Venustiano Carranza</option>
    	        	<option data-id="4">Coyoacán</option>
    	        	<option data-id="5">Iztapalapa</option>
    	        	<option data-id="6">Milpa Alta</option>
    		</select>
	<select class="selectpicker" id="inputDistrict" name="district" disabled="">
		<option value="-1">-- Seleccione un distrito --</option>
	</select>
</div>	
<!-- FIXME -->
			</div>
       			 <div class="col-md-8 col-md-offset-2 button-ubicar">
       			 	<button type="button" class="btn btn-lg btn-default">UBICAR</button>
       			 </div>
	</div><!-- .container -->
      </div><!-- .rumbo-proyectos -->
	<a name="QuieroRumbear"></a>
      <div class="rumbo-rumbear">
	<div class="rumbo-rumbear-inner">
	<div class="container">
          <h2>¡QUIERO RUMBEAR!</h2>
	 <div class="col-md-8 col-md-offset-2">
	  <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Datos de tu propuesta</h3>
            </div>
            <div class="panel-body">
		<div class="panel-form col-md-6">
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
		<div class="panel-rubro col-md-6">
		<h4>RUBRO</h4>
		<div class="tabs-rubro">
		    
		   <div class="tab">
		       <input type="radio" id="tab-1" name="tab-group-1">
		       <label for="tab-1" class="icons icon-obras">Obras y servicios</label>
		       <div class="content-rumbear content-obras">
			Obras y servicios
		       </div> 
		   </div>
		    
		   <div class="tab">
		       <input type="radio" id="tab-2" name="tab-group-1">
		       <label for="tab-2" class="icons icon-equipamiento">Equipamiento</label>
		       <div class="content-rumbear content-equipamiento">
		           Equipamiento
		       </div> 
		   </div>
		    
		    <div class="tab">
		       <input type="radio" id="tab-3" name="tab-group-1">
		       <label for="tab-3" class="icons icon-infraestructura">Infraestructura Urbana</label>
		       <div class="content-rumbear content-infraestructura">
		           Infraestructura Urbana
		       </div> 
		   </div>
		
		    <div class="tab">
		       <input type="radio" id="tab-4" name="tab-group-1">
		       <label for="tab-4" class="icons icon-prevencion">Prevención del delito</label>
		       <div class="content-rumbear content-prevencion">
		           Prevención del delito
		       </div>
		   </div>
		
		    <div class="tab">
		       <input type="radio" id="tab-5" name="tab-group-1">
		       <label for="tab-5" class="icons icon-actividades">Actividades recreativas, deportivas y culturales</label>
		       <div class="content-rumbear content-actividades">
		           Actividades recreativas, deportivas y culturales
		       </div>
		   </div>
		
		<div class="content-rumbear content-null">Selecione un rubro</div>
		
		</div><!-- .tabs-rubro -->
		</div><!--- .panel-rubro -->
            </div>
          </div><!-- .panel -->          
        </div>
	</div><!-- .container -->
	</div><!-- .rumbo-rumbear-inner -->
      </div><!-- .rumbo-rumbear -->

      <div class="rumbo-rumberos">
	<div class="container">
		<h2>RUMBEROS DEL MES</h2>
        <div class="col-lg-4 item-proyecto">
          <img class="thumb-proyecto" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Foto de mi parquecito">
          <h3>MI PARQUECITO</h3>
		<div class="content-proyecto">
        	  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        	  <p class="author"><a href="#profie-author">Por: Joel Rodríguez</a></p>
        	  <p class="local">Del. Miguel Hidalgo - Col. Polanco</p>
		  <div class="status-proyecto">
			<a href="/proyecto/14"><i class="icons icon-obras"></i>¡COMPLETADO!</a>
		  </div>
        	</div>
	</div><!-- /.col-lg-4 -->
        <div class="col-lg-4 item-proyecto">
          <img class="thumb-proyecto" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Foto de mi parquecito">
          <h3>PUENTE PA TODOS</h3>
		<div class="content-proyecto">
        	  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        	  <p class="author"><a href="#profie-author">Por: Marcela Brasil</a></p>
        	  <p class="local">Del. Azcapotzalco</p>
		  <div class="status-proyecto">
			<a href="/proyecto/14"><i class="icons icon-obras"></i>¡COMPLETADO!</a>
		  </div>
		</div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 item-proyecto">
          <img class="thumb-proyecto" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Foto de mi parquecito">
          <h3>¡LUCES Y LUCES!</h3>
		<div class="content-proyecto">
        	  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        	  <p class="author"><a href="#profie-author">Por: Joel Rodríguez</a></p>
        	  <p class="local">Del. Miguel Hidalgo - Col. Polanco</p>
		  <div class="status-proyecto">
			<a href="/proyecto/14"><i class="icons icon-equipamiento"></i>¡COMPLETADO!</a>
		  </div>
        	</div>
	</div><!-- /.col-lg-4 -->
	</div><!-- .container -->
      </div><!-- .rumbo-rumberos -->

@stop
