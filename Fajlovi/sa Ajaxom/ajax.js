function ajax_home() {
  		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("podstranica").innerHTML = "";
			document.getElementById("podstranica").innerHTML = this.responseText;
    		}
  	};
 	 xhttp.open("GET", "home_ajax.html", true);
  	xhttp.send();
}

function ajax_match() {
  		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("podstranica").innerHTML = "";
			document.getElementById("podstranica").innerHTML = this.responseText;
    		}
  	};
 	 xhttp.open("GET", "match_ajax.html", true);
  	xhttp.send();
}

function ajax_team() {
  		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("podstranica").innerHTML = "";
			document.getElementById("podstranica").innerHTML = this.responseText;
    		}
  	};
 	 xhttp.open("GET", "team_ajax.html", true);
  	xhttp.send();
}

function ajax_shop() {
  		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("podstranica").innerHTML = "";
			document.getElementById("podstranica").innerHTML = this.responseText;
    		}
  	};
 	 xhttp.open("GET", "shop_ajax.html", true);
  	xhttp.send();
}

function ajax_club() {
  		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("podstranica").innerHTML = "";
			document.getElementById("podstranica").innerHTML = this.responseText;
    		}
  	};
 	 xhttp.open("GET", "club_ajax.html", true);
  	xhttp.send();
}
