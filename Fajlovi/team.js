function lokalnaPohrana(){
	document.getElementById('imeT').value = localStorage.getItem("search");
}
function pritisnuto(){
	var a = document.getElementById('imeT').value;
	for(var i = 0 ; i < a.length ; i++){
		if(a[i] > 0 && a[i] < 9){
			document.getElementById('poruka').style.display = "block";
			document.getElementById('imeT').value = "Neispravan unos!";
			localStorage.setItem("search", a);
			return;	
		}
	}

	if(a.length == 0){
		document.getElementById('poruka').style.display = "block";
		document.getElementById('imeT').value = "Neispravan unos!";
		localStorage.setItem("search", a);
		return;
	}

	document.getElementById('poruka').style.display = "none";
	localStorage.setItem("search", a);
}

