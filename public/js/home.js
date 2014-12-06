$('#btnSearchProjects').click(function(){
	var idCityHall = $('#inputCityHallSearch').val() != null ? $('#inputCityHallSearch').val() : '';
	var idDistrict = $('#inputDistrictSearch').val() != null ? $('#inputDistrictSearch').val() : '';
	window.location.href = 'projects?ch=' + idCityHall + '&d=' + idDistrict;
});

retrieveDistricts('#inputCityHallSearch', '#inputDistrictSearch');
retrieveDistricts('#inputCityHallCreate', '#inputDistrictCreate');

$('#btnCreateProject').click(function(){
	var title = $('#inputTitle').val();
	var idCityHall = $('#inputCityHallCreate').val();
	var idDistrict = $('#inputDistrictCreate').val();
	var idCategory = $("#tabsCatgories input[type='radio']:checked").val();
	window.location.href = 'projects/create?t=' + title + '&c=' + idCategory + '&ch=' + idCityHall + '&d=' + idDistrict;
});