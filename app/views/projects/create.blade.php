@extends('layout')

@section('title')
  <title>Crear propuesta</title>
@stop

@section('content')
<div class="rumbo-page">
<div class="container" id="project-create">
<h2>¡Quiero Rumbear!</h2>
<div class="row center">
   	<div class="col-md-8 col-md-offset-2">      
      	{{ Form::open(array('url' => 'projects/create', 'id' => 'createProject', 'files' => true)) }}
         	<legend>Datos de tu propuesta</legend>
         	<div class="form-group">
            	<label for="inputTitle">Nombre de la propuesta</label>
            	<input type="text" class="form-control" id="inputTitle" name="title" placeholder="Ej: Calle Emiliano Zapata más limpia">
         	</div>
         	<div class="form-group">
            	<label for="inputCityHall">Delegación</label>
            	<select class="form-control" id="inputCityHall" name="cityHall">
	               	<option value="">-- Seleccione una delegación --</option>
	               	@foreach($city_halls as $city_hall)
	                  	<option value="{{ $city_hall->id }}">{{ $city_hall->city_hall }}</option>
	               	@endforeach
            	</select>
         	</div>
         	<div class="form-group">
	            <label for="inputDistrict">Colonia</label>
	            <select class="form-control" id="inputDistrict" name="district_id" disabled>
	               	<option value="">-- Seleccione un distrito --</option>
	            </select>
	        </div>
	        <div class="form-group">
	            <label for="inputProblem">Problema</label>
	            <textarea class="form-control" id="inputProblem" name="problem" rows="5" placeholder="Ej: En el parque público de mi colonia hay mucha basura."></textarea>
	        </div>
	        <div class="form-group">
	            <label for="inputSolution">Solución</label>
	            <textarea class="form-control" id="inputSolution" name="solution" rows="5" placeholder="Ej: Instalar 6 contenedores de separación de basura."></textarea>
	        </div>
	        <div class="form-group">
	            <label for="inputCategory">Rubro</label>
               	<select class="form-control" id="inputCategory" name="category_id">
                  	<option value="">-- Seleccione un rubro --</option>
	                  @foreach($categories as $category)
	                     <option value="{{ $category->id }}">{{ $category->category }}</option>
	                  @endforeach
               	</select>
	        </div>
	        <div class="form-group">
	            <label for="inputCost">Costo aproximado en pesos (opcional)</label>
	            <input type="number" min="1" class="form-control" id="inputCost"  name="cost" placeholder="Ej: 750000">
	        </div>
	        <div class="form-group">
	            <label for="inputBeneficiaries">Beneficiarios (opcional)</label>
	            <textarea class="form-control" id="inputBeneficiaries"  name="beneficiaries" rows="5" placeholder="Ej: Vecinos de la colonia."></textarea>
	        </div>         
	        <div class="form-group">
	            <label for="inputPhoto">Foto (opcional)</label>
	            <input type="file" id="inputPhoto" name="photo" accept="image/*">
	        </div>
         	<button type="submit" class="btn btn-default">Submit</button>
     	{{ Form::close() }}
   	</div>
</div>
</div><!-- #project-create -->
</div><!-- .rumbo-page -->
@stop

@section('scripts')   
   	{{ HTML::script('js/projects.js') }}
   	{{ HTML::script('//oss.maxcdn.com/jquery.form/3.50/jquery.form.min.js') }}
@stop
