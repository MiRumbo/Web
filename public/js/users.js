$( "#inputCityHall" ).change(function() {
	
	var idCityHall = $(this).find(':selected').data('id');

	$.get('http://localhost/mi-rumbo/public/cityhall/' + idCityHall +'/districts', function(data) {
  		// $('#inputDistrict').html( data );
	 	console.log(data);
	 	$('#inputDistrict').prop('disabled', false);
	 	$("#inputDistrict").append('<option value=' + data[0].district + '>' + data[0].district + '</option>');
	});
});