$('#btnSearchProjects').click(function(){
	var idCityHall = $('#inputCityHall').val() != null ? $('#inputCityHall').val() : '';
	var idDistrict = $('#inputDistrict').val() != null ? $('#inputDistrict').val() : '';
	window.location.href = 'projects?ch=' + idCityHall + '&d=' + idDistrict;
});

retrieveDistricts('#inputCityHallSearch', '#inputDistrictSearch');
retrieveDistricts('#inputCityHallCreate', '#inputDistrictCreate');

$('#btnCreateProject').click(function(){
	window.location.href = 'projects/create?t=' + 'idCityHall' + '&c=' + 'idDistrict' + '&ch=&d=';
});