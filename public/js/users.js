retrieveDistricts('#inputCityHall', '#inputDistrict');

$('#login #signinForm').submit(function() {
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

$('#signup #signupForm').submit(function() {
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
    var email = $('#login #inputEmail').val();
    var password = $('#login #inputPassword').val();

    if (!validateEmail(email)) {
        alert('Invalid email');
        return null;
    }
    if (password.length < 1) {
        alert('Invalid password. Min 8 characters');
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
    var email = $('#signup #inputEmail').val();
    var password = $('#signup #inputPassword').val();
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
    var repeatedPassword = $('#inputConfirmPassword').length > 0 ?
        $('#inputConfirmPassword').val() : password
    return password == repeatedPassword;
};

function validateDistrict(idDistrict) {
    return idDistrict != '';
};