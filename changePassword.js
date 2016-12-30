function provjera(){
	var oldPassword = document.getElementById("oldPassword");
	var newPassword = document.getElementById("newPassword");
	var confirmNewPassword = document.getElementById("cnp");

	if(oldPassword.value == "" || provjeraSlova(username.value) == 0){
		oldPassword.style.backgroundColor = "#ff8080";
	}
	else {
		oldPassword.style.backgroundColor = "#FFFFFF";
	}

	if(newPassword.value == "" || provjeraSlova(username.value) == 0){
		newPassword.style.backgroundColor = "#ff8080";
	}
	else {
		newPassword.style.backgroundColor = "#FFFFFF";
	}

	if(confirmNewPassword.value == "" || provjeraSlova(username.value) == 0){
		confirmNewPassword.style.backgroundColor = "#ff8080";
	}
	else {
		confirmNewPassword.style.backgroundColor = "#FFFFFF";
	}


}