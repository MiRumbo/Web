$( "#inputCityHall" ).change(function() {

	$("#inputDistrict .district-option").remove();
	
	var idCityHall = $(this).find(':selected').data('id');

	if(idCityHall < 0) {
		$('#inputDistrict').prop('disabled', true);
	} else {
		$.get('/cityhall/' + idCityHall +'/districts', function(data) {
		 	$('#inputDistrict').prop('disabled', false);
		 	$("#inputDistrict .district-option").remove();
		 	for(i in data) {
		 		$('#inputDistrict').append("<option class='district-option' value=" 
		 			+ data[i].id + ">" + data[i].district + "</option>");
		 	}
	 	});
	}
});


// Aplicar class para fixar o topo
jQuery("document").ready(function($){
var nav = $('#navheader');
$(window).scroll(function () {
if ($(this).scrollTop() > 130) {
nav.addClass("navbar-fixed-top");
} else {
nav.removeClass("navbar-fixed-top");
}
});
});

