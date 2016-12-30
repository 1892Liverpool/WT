var popisMensFashion = ["Artikal 1" , "Artikal 2" , "Artikal 3" , "Artikal 4" ]
var popisWomensFashion = ["Artikal 1" , "Artikal 2" , "Artikal 3" , "Artikal 4" ]
var popisKidsFashion = ["Artikal 1" , "Artikal 2" , "Artikal 3" , "Artikal 4" ]

function lokalnaPohrana(){
	document.getElementsByName("dodaneStvari1")[0].value = localStorage.getItem("dodaniArtikli1");
	document.getElementsByName("dodaneStvari2")[0].value = localStorage.getItem("dodaniArtikli2");
        document.getElementsByName("dodaneStvari3")[0].value = localStorage.getItem("dodaniArtikli3");
}

function dodajMensFashion(){
        var dugmeAdd = document.getElementsByName("artikli1")[0];
	var tekst = dugmeAdd.selectedOptions[0].text;	

	var dodaneStvari = document.getElementsByName("dodaneStvari1")[0];
	dodaneStvari.value += tekst + "\n";
}

function kupiMensFashion(){
	var dodaneStvari = document.getElementsByName("dodaneStvari1")[0].value;
	localStorage.setItem("dodaniArtikli1", dodaneStvari);

}

function dodajWomensFashion(){
        var dugmeAdd = document.getElementsByName("artikli2")[0];
	var tekst = dugmeAdd.selectedOptions[0].text;	

	var dodaneStvari = document.getElementsByName("dodaneStvari2")[0];
	dodaneStvari.value += tekst + "\n";
}

function kupiWomensFashion(){
	var dodaneStvari = document.getElementsByName("dodaneStvari2")[0].value;
	localStorage.setItem("dodaniArtikli2", dodaneStvari);	
}

function dodajKidsFashion(){
        var dugmeAdd = document.getElementsByName("artikli3")[0];
	var tekst = dugmeAdd.selectedOptions[0].text;

	var dodaneStvari = document.getElementsByName("dodaneStvari3")[0];
	dodaneStvari.value += tekst + "\n";
}

function kupiKidsFashion(){
	var dodaneStvari = document.getElementsByName("dodaneStvari3")[0].value;
	localStorage.setItem("dodaniArtikli3", dodaneStvari);
}
