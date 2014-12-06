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


<div role="tabmejora">
  <ul class="col-md-6" role="tablist2">
    <li role="tabitem" class="active"><a href="#item1" aria-controls="item1" role="tab" data-toggle="tab">1. HAZ TU PROPUESTA</a></li>
    <li role="tabitem"><a href="#item2" aria-controls="item2" role="tab" data-toggle="tab">2. COLABORA Y HAZLO UN PROYECTO</a></li>
    <li role="tabitem"><a href="#item3" aria-controls="item3" role="tab" data-toggle="tab">3. COMPARTE TU PROYECTO</a></li>
    <li role="tabitem"><a href="#item4" aria-controls="item4" role="tab" data-toggle="tab">4. VOTA POR OTROS PROYECTOS</a></li>
    <li role="tabitem"><a href="#item5" aria-controls="item5" role="tab" data-toggle="tab">5. MONITOREA</a></li>
    <li role="tabitem"><a href="#item6" aria-controls="item6" role="tab" data-toggle="tab">6. ¡TU RUMBO MEJORA!</a></li>
  </ul>

  <div class="tab-content col-md-6">
    <div role="tabmejora" class="tab-pane active" id="item1"></div>
    <div role="tabmejora" class="tab-pane" id="item2"></div>
    <div role="tabmejora" class="tab-pane" id="item3"></div>
    <div role="tabmejora" class="tab-pane" id="item4"></div>
    <div role="tabmejora" class="tab-pane" id="item5"></div>
    <div role="tabmejora" class="tab-pane" id="item6"></div>
  </div>

</div>
		</div><!-- .container -->
	</div><!-- .rumbo-mejora -->
	<a name="QueHay"></a>
	<div class="rumbo-proyectos">
		<div class="container">
			<h2>¿QUÉ PROYECTOS HAY POR MI RUMBO?</h2>
			<div class="col-md-8 col-md-offset-2">
<!-- FIXME -->
<div class="form-group form-inline">	
	<select class="selectpicker" data-style="btn-primary" id="inputCityHallSearch" name="cityHall">
		<option value="">-- Seleccione una delegación --</option>
       	@foreach($city_halls as $city_hall)
          	<option value="{{ $city_hall->id }}">{{ $city_hall->city_hall }}</option>
       	@endforeach
    </select>
	<select class="selectpicker" id="inputDistrictSearch" name="district" disabled>
		<option value="">-- Seleccione un distrito --</option>
	</select>
</div>	
<!-- FIXME -->
			</div>
       			 <div class="col-md-8 col-md-offset-2 button-ubicar">
       			 	<button id="btnSearchProjects" class="btn btn-lg btn-default">UBICAR</a>
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
		<input class="form-control" id="inputTitle" name="name" type="text">
	</div>	
	<div class="row">
		<select class="form-control" id="inputCityHallCreate" name="cityHall">
			<option value="">-- Seleccione una delegación --</option>
	       	@foreach($city_halls as $city_hall)
	          	<option value="{{ $city_hall->id }}">{{ $city_hall->city_hall }}</option>
	       	@endforeach
		</select>
	</div>
	<div class="row">
		<select class="form-control" id="inputDistrictCreate" name="district" disabled="">
			<option value="">-- Seleccione un distrito --</option>
		</select>
	</div>
	<div class="row">
	 	<button id="btnCreateProject" class="btn btn-lg btn-default">CUÉNTANOS +</a>
	 </div>
</div>	
<!-- FIXME -->
		</div><!-- .panel-form -->
		<div class="panel-rubro col-md-6">
		<h4>RUBRO</h4>
		<div id="tabsCatgories" class="tabs-rubro">
		    
		   <div class="tab">
		       <input value="1" type="radio" id="tab-1" name="tab-group-1">
		       <label for="tab-1" class="icons icon-category-1">Obras y servicios</label>
		       <div class="content-rumbear content-obras">
			Obras y servicios
		       </div> 
		   </div>
		    
		   <div class="tab">
		       <input value="2" type="radio" id="tab-2" name="tab-group-1">
		       <label for="tab-2" class="icons icon-category-2">Equipamiento</label>
		       <div class="content-rumbear content-equipamiento">
		           Equipamiento
		       </div> 
		   </div>
		    
		    <div class="tab">
		       <input value="3" type="radio" id="tab-3" name="tab-group-1">
		       <label for="tab-3" class="icons icon-category-3">Infraestructura Urbana</label>
		       <div class="content-rumbear content-infraestructura">
		           Infraestructura Urbana
		       </div> 
		   </div>
		
		    <div class="tab">
		       <input value="4" type="radio" id="tab-4" name="tab-group-1">
		       <label for="tab-4" class="icons icon-category-4">Prevención del delito</label>
		       <div class="content-rumbear content-prevencion">
		           Prevención del delito
		       </div>
		   </div>
		
		    <div class="tab">
		       <input value="5" type="radio" id="tab-5" name="tab-group-1">
		       <label for="tab-5" class="icons icon-category-5">Actividades recreativas, deportivas y culturales</label>
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
			<a href="/proyecto/14"><i class="icons icon-category-1"></i>¡COMPLETADO!</a>
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
			<a href="/proyecto/14"><i class="icons icon-category-1"></i>¡COMPLETADO!</a>
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
			<a href="/proyecto/14"><i class="icons icon-category-2"></i>¡COMPLETADO!</a>
		  </div>
        	</div>
	</div><!-- /.col-lg-4 -->
	</div><!-- .container -->
      </div><!-- .rumbo-rumberos -->

@stop

@section('scripts')   
   {{ HTML::script('js/home.js') }}
@stop
