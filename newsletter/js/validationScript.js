// form validation

function val(){
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var birth = document.getElementById('birth').value;
	var product_interest = document.getElementById('product_interest').value;
	var error_text;

	error_alert.style.padding = "10px";

	if (name.length<4) {

		error_text = "Enter valid Name"
		error_alert.innerHTML = error_text;
		return false;
	}

	if (email.indexOf("@") == -1 || email.length < 6 ) {
		
		error_text = "Enter valid Email"
		error_alert.innerHTML = error_text;
		return false;
	}


	if (birth.length<5) {

		error_text = "Enter Valid birth date e.g., 05-23"
		error_alert.innerHTML = error_text;
		return false;
	}

	if (product_interest.length <= 30 ) {
		
		error_text = "Enter More than 30 words in product interest"
		error_alert.innerHTML = error_text;
		return false;
	}

	else{

		alert("Thanks for the registration")
		return true;
	}

}