<div class="form-group">
	<label for="inputName">Nombre completo</label>
	<input type="text" class="form-control" id="inputName" name="name">
</div>
<div class="form-group">
	<label for="inputUsername">Nombre de usuario</label>
	<input type="text" class="form-control" id="inputUsername" name="username">
</div>
<div class="form-group">
	<label for="inputEmail">Correo electrónico</label>
	<input type="email" class="form-control" id="inputEmail" name="email">
</div>
<div class="form-group">
	<label for="inputPassword">Constraseña</label>
	<input type="password" class="form-control" id="inputPassword" name="password">
</div>
<div class="form-group">
	<label for="inputConfirmPassword">Confirmar constraseña</label>
	<input type="password" class="form-control" id="inputConfirmPassword" name="confirmPassword">
</div>
<label for="inputLocation">Residencia</label>
<div class="form-group form-inline">	
	<select class="form-control" id="inputCityHall" name="cityHall">
		<option data-id="-1">-- Seleccione una delegación --</option>
		@foreach($city_halls as $city_hall)
        	<option data-id="{{ $city_hall->id }}">{{ $city_hall->city_hall }}</option>
    	@endforeach
	</select>
	<select class="form-control" id="inputDistrict" name="district" disabled>
		<option value='-1'>-- Seleccione un distrito --</option>
	</select>
</div>

@section('scripts')
	{{ HTML::script('js/users.js') }}
@stop