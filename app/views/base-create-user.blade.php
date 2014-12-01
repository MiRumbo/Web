<div class="form-group">
	<label for="inputTitle">Nombre completo</label>
	<input type="text" class="form-control" id="inputName" name="name">
</div>
<div class="form-group">
	<label for="inputUsername">Nombre de usuario</label>
	<input type="text" class="form-control" id="inputUsername" name="username">
</div>
<div class="form-group">
	<label for="inputPassword">Constraseña</label>
	<input type="password" class="form-control" id="inputPassword" name="password">
</div>
<label for="inputLocation">Residencia</label>
<div class="form-group form-inline">	
	<select class="form-control" id="inputCityHall" name="cityHall">
		<option>-- Seleccione una delegación --</option>
	   <option data-id="3">Miguel Hidalgo</option>
	   <option data-id="4">Cuauhtémoc</option>
	   <option data-id="5">Venustiano Carranza</option>
	   <option data-id="6">Coyoacán</option>
	   <option data-id="7">Iztapalapa</option>
	   <option data-id="8">Milpa Alta</option>
	</select>
	<select class="form-control" id="inputDistrict" name="district" disabled>
		<option>-- Seleccione un distrito --</option>
	</select>
</div>