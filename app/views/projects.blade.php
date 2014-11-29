@extends('layout')

@section('title')
  <title>Crear propuesta</title>
@stop

@section('content')
<div class="row center">
   <div class="col-md-4 col-md-offset-4">      
      {{ Form::open(array('url' => 'projects', 'id' => 'createProject')) }}
         <legend>Crear una propuesta de proyecto</legend>
         <div class="form-group">
            <label for="inputTitle">Titulo del proyecto</label>
            <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Ej: Talleres culturales">
         </div>
         <div class="form-group">
            <label for="inputDescription">Descripción</label>
            <textarea class="form-control" id="inputDescription" rows="5" placeholder="Ej: Capacitaciones gratuitas para el desarrollo de actividades artísticas y recreativas en instituciones barriales."></textarea>
         </div>
         <div class="form-group">
            <label for="inputCost">Costo aproximado (Pesos)</label>
            <input type="number" min="1" class="form-control" id="inputCost" placeholder="Ej: 40">
         </div>
         <div class="form-group">
            <label for="inputCategory">Category</label>
            <select class="form-control" id="inputCategory">
               <option>-- Seleccione una categoría --</option>
               <option>Obras y servicios</option>
               <option>Equipamiento</option>
               <option>Infraestructura urbana</option>
               <option>Prevención del delito</option>
               <option>Actividades recreativas, deportivas y culturales</option>
            </select>
         </div>
         <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
         </div>
         <h4>Información personal (Opcional)</h4>
         <div class="form-group">
            <label for="inputName">Nombre Completo</label>
            <input type="text" class="form-control" id="inputName" placeholder="Ej: Mauricio Muñoz Chaves">
         </div>
         <button type="submit" class="btn btn-default">Submit</button>
      {{ Form::close() }}
   </div>
</div>
@stop