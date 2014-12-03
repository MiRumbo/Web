$('#createProject').submit(function() {
	var options = {
        beforeSubmit:  validateProjectForm,  // pre-submit callback 
        success:       createProjectCallabck  // post-submit callback 
    }; 

	$(this).ajaxSubmit(options);
	
	return false;
});

function validateProjectForm(formData, jqForm, options) {

    var title = $('#inputTitle').val();
    var idDistrict = $('#inputDistrict').val();
    var idCategory = $('#inputCategory').val();
    var problem = $('#inputProblem').val();
    var solution = $('#inputSolution').val();
    var photo = $('#inputPhoto').prop('files').length > 0 ?
         $('#inputPhoto').prop('files')[0] : null;

    if (!title.length > 0) {
        alert('Invalid title');
        return false;
    }
    if (idDistrict < 0) {
        alert('Invalid district');
        return false;
    }
    if (idCategory < 0) {
        alert('Invalid category');
        return false;
    }
    if (!problem.length > 0) {
        alert('Invalid problem description');
        return false;
    }
    if (!solution.length > 0) {
        alert('Invalid solution description');
        return false;
    }
    var userPhotoExtension = /\.(png|gif|jpe?g)$/;
    if (photo != null && !userPhotoExtension.test(photo.name.toLowerCase())) {
        alert('Invalid photo');
        return false;
    }

    return true;
}

function createProjectCallabck(responseText, statusText, xhr, $form)  { 

    if(responseText.hasError) {
        alert(responseText.errorMessage);
    } else {
        window.location.replace(responseText.id);
    }

} 
