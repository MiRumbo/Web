$( "#inputCityHall" ).change(function() {

	$("#inputDistrict .district-option").remove();
	
	var idCityHall = $(this).find(':selected').data('id');

	if(idCityHall < 0) {
		$('#inputDistrict').prop('disabled', true);
	} else {
		$.get('cityhall/' + idCityHall +'/districts', function(data) {
		 	$('#inputDistrict').prop('disabled', false);
		 	$("#inputDistrict .district-option").remove();
		 	for(i in data) {
		 		$('#inputDistrict').append("<option class='district-option' value=" 
		 			+ data[i].id + ">" + data[i].district + "</option>");
		 	}
	 	});
	}
});

$('#signinForm').submit(function() {
	event.preventDefault();
	// Validate data
	var user = validateSigninForm();
	if(user == null) {
		return;
	} else {
		$.post('signin', user, function(response) {
			if(response.hasError) {
				alert(response.errorMessage);
			} else {
                window.location.replace('/');
            }
        });
	}
});

$('#signupForm').submit(function() {
	event.preventDefault();
	// Validate data
	var user = validateSignupForm();
	if(user == null) {
		return;
	} else {
		$.post('signup', user, function(response) {
			if(response.hasError) {
				alert(response.errorMessage);
			} else {
				window.location.replace('/');
			}
        });
	}
});

function validateSigninForm() {
    var email = $('#inputEmail').val();
    var password = $('#inputPassword').val();

    if (!validateEmail(email)) {
        alert('Invalid email');
        return null;
    }
    if (!validatePassword(password)) {
        alert('Invalid password');
        return null;
    }

    var user = {
    	email: email,
    	password: password
    };

    return user;
}

function validateSignupForm() {
	var name = $('#inputName').val();
	var username = $('#inputUsername').val();
    var email = $('#inputEmail').val();
    var password = $('#inputPassword').val();
    var idDistrict = $('#inputDistrict').val();

    if (!validateName(name)) {
        alert('Invalid name');
        return null;
    }
    if (!validateUsername(username)) {
        alert('Invalid username');
        return null;
    }
    if (!validateEmail(email)) {
        alert('Invalid email');
        return null;
    }
    if (!validatePassword(password)) {
        alert('Invalid password');
        return null;
    }
    if (!validateDistrict(idDistrict)) {
        alert('Invalid district');
        return null;
    }

    var user = {
    	name: name,
    	username: username,
    	email: email,
    	password: password,
    	district_id: idDistrict
    };

    return user;
}

function validateName(name) {
    return name.length > 0;
};

function validateEmail(email) {
    var emailRegExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    return emailRegExp.test(email);
};

function validateUsername(username) {
    if (username.length > 15) return false;
    var userNameRegExp = /^\w+[\.-]?\w+$/;
    return userNameRegExp.test(username);
};

function validatePassword(password) {
    if (password.length < 1) return false;
 //    if(usingConfirmation != null && usingConfirmation) {
	//     var repeatedPassword = $('#inputConfirmPassword').val();
	// }
    return true;
};

function validateDistrict(idDistrict) {
    return idDistrict >= 0;
};