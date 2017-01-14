<?php 

		$dbname = "wt";
		$servername = "localhost";
		$username = "admin";
		$password = "admin";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}


		$xml = new SimpleXMLElement('artikli/kidsfashion.xml' , 0 , true);
		foreach ($xml -> artikal as $a) {
			
			$rezultat = "select * from kidsfashion where artikal = '$a';";
			$rezultat = $conn -> query($rezultat);
			if($rezultat -> num_rows < 1){
				$rezultat = "insert into kidsfashion (id , artikal) values (null , '$a');";
				$rezultat = $conn -> query($rezultat);
			}
	
			
		}

		$xml = new SimpleXMLElement('artikli/womensfashion.xml' , 0 , true);
		foreach ($xml -> artikal as $a) {
			
			$rezultat = "select * from womensfashion where artikal = '$a';";
			$rezultat = $conn -> query($rezultat);
			if($rezultat -> num_rows < 1){
				$rezultat = "insert into womensfashion (id , artikal) values (null , '$a');";
				$rezultat = $conn -> query($rezultat);
			}
	
			
		}

		$files = glob('korisnici/*.xml');
		foreach($files as $file){

			$xml = new SimpleXMLElement($file , 0 , true);
			$usern = basename($file , '.xml');
			$password = $xml->password;
			$email = $xml->email;

			$rezultat = "select * from korisnik where email = '$email';";
			$rezultat = $conn -> query($rezultat);
			if($rezultat -> num_rows < 1){
				$rezultat = "insert into korisnik (id , username , email , password) values (null , '$usern' ,'$email' , '$password');";
				$rezultat = $conn -> query($rezultat);
			}

		}

		$files = glob('pretrage/*.xml');
		foreach ($files as $file) {
			
			

			$xml = new SimpleXMLElement($file , 0 , true);
			$usern = basename($file , '.xml');
			$tekst = $xml->tekst;

			$idKorisnika = "select * from korisnik where username = '$usern';";
			$idKorisnika = $conn -> query($idKorisnika);
			
			$id = "";
			foreach ($idKorisnika as $i) {
				$id = $i['id'];
				break;
			}
			
			$rezultat = "select * from pretraga where korisnik = '$id' and tekst = '$tekst';";
			$rezultat = $conn -> query($rezultat);

			if($rezultat -> num_rows < 1){
				$rezultat = "insert into pretraga (id , korisnik , tekst) values (null , '$id' , '$tekst');";
				$rezultat = $conn -> query($rezultat);
			}

		}





	header('Location: index.php');

?>