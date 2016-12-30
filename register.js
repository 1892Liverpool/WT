function provjera(){
	var username = document.getElementById("username");
	var email = document.getElementById("email");
	var password = document.getElementById("password");
	var confirmPassword = document.getElementById("confirmPassword");

	if(username.value == "" || provjeraSlova(username.value) == 0){
		username.style.backgroundColor = "#ff8080";
	}
	else {
		username.style.backgroundColor = "#FFFFFF";
	}


	if(email.value == "" || !validacijaEmail(email.value)){
		email.style.backgroundColor = "#ff8080";
	}
	else {
		email.style.backgroundColor = "#FFFFFF";
	}


	if(password.value == "" || password.value.length < 5 || password.value != confirmPassword.value){
		password.style.backgroundColor = "#ff8080"; 
	}
	else {
		password.style.backgroundColor = "#FFFFFF";
	}


	if(confirmPassword.value == "" || password.value != confirmPassword.value){
		confirmPassword.style.backgroundColor = "#ff8080";
	}
	else {
		confirmPassword.style.backgroundColor = "#FFFFFF";
	}


}

function provjeraSlova(usern){
	if(usern.length < 3){
		return 0;
	}
	s1 = usern.charAt(0);
	s2 = usern.charAt(1);
	s3 = usern.charAt(2);

	if(s1 < "A" || s1 > "z" || s2 < "A" || s2 > "z" || s3 < "A" || s3 >"z"){
		return 0;
	} 

	return 1;
}

function validacijaEmail(email) {
    var r = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return r.test(email);
}


