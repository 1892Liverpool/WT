<?php

$izlaz = '';

if(isset($_POST['vrijednost'])){

		$p = $_POST['vrijednost'];

		$data = array();

		#$fajlovi = glob('korisnici/*.xml');
		#$i = 0;
		#foreach($fajlovi as $fajl){
		#	$xml = new SimpleXMLElement($fajl , 0 , true);
		#	if($i < 10 && (0 === strpos(basename($fajl) , $p) || 0 === strpos($xml -> email , $p))) {
		#		$data[] = pathinfo($fajl, PATHINFO_FILENAME) . '  ' .$xml -> email;
		#		$i++;
		#	}
		#}

		#Spirala 4 
		/*$dbname = "wt";
		$servername = "localhost";
		$username = "admin";
		$password = "admin";

		$conn = mysqli_connect($servername, $username, $password, $dbname);*/

		$conn = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=sampledb', 'user6YP', 'e2fTWFNufhxsejUg');

		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}
		
		$rezultat = "select * from korisnik;";
		$rezultat = $conn->query($rezultat);
		$i = 0;
		foreach($rezultat as $r){
			if($i < 10 && (0 === strpos($r['username'] , $p) || 0 === strpos($r['email'] , $p))) {
				$data[] = $r['username'] . '  ' .$r['email'];
				$i++;
			}
		}

    	if(count($data) == 0){
    		$izlaz = 'There was no search results!';
    	}
    	else{
    		foreach($data as $d){
				$izlaz .= '<p>' . $d . '</p>';
			}
    	}

	}
echo($izlaz);
?>