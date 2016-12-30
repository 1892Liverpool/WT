function provjera(){
	var username = document.getElementById("username");
	var password = document.getElementById("password");

	

	if(username.value == ""){
		username.style.backgroundColor = "#ff8080";
	}
	else {
		username.style.backgroundColor = "#FFFFFF";
	}

	if(password.value == ""){
		password.style.backgroundColor = "#ff8080"; 
	}
	else {
		password.style.backgroundColor = "#FFFFFF";
	}

}
