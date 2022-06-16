// create form validation function
function validateForm(){
	// get input field details
	var full_name = $("#full_name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var message = $("#message").val();

	// if name is empty throw an error
	if(full_name == ''){
		alert("Error! You must enter first name");
		return false;
	}

	// if email is empty throw an error
	if(email == ''){
		alert("Error! You must enter email");
		return false;
	}

	// if phone is empty throw an error
	if(phone == ''){
		alert("Error! You must enter phone");
		return false;
	}

	// if message is empty throw an error
	if(message == ''){
		alert("Error! You must enter the message");
		return false;
	}
}