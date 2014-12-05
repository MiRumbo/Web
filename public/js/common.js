// Aplicar class para fixar o top
jQuery("document").ready(function($) {
	var nav = $('#navheader');
	$(window).scroll(function () {
		if ($(this).scrollTop() > 130) {
			nav.addClass("navbar-fixed-top");
			document.body.style.margin = "200px 0px 0px 0px";
		} else {
			nav.removeClass("navbar-fixed-top");
			document.body.style.margin = "0px 0px 0px 0px";
		}
	});
});

function retrieveDistricts(cityHallInputSelector, districtInputSelector) {
	$(cityHallInputSelector).change(function() {
		$(districtInputSelector + ' .district-option').remove();	
		var idCityHall = $(this).find(':selected').val();
		if(idCityHall == '') {
			$(districtInputSelector).prop('disabled', true);
		} else {
			$.get('/cityhall/' + idCityHall +'/districts', function(data) {
			 	$(districtInputSelector).prop('disabled', false);
			 	$(districtInputSelector + ' .district-option').remove();
			 	for(i in data) {
			 		$(districtInputSelector).append("<option class='district-option' value=" 
			 			+ data[i].id + ">" + data[i].district + "</option>");
			 	}
		 	});
		}
	});
}

