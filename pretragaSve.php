<?php

$izlaz = '';

if(isset($_POST['vrijednost'])){

		$p = $_POST['vrijednost'];

		$data = array();

		$fajlovi = glob('korisnici/*.xml');
		foreach($fajlovi as $fajl){
			$xml = new SimpleXMLElement($fajl , 0 , true);
			if(0 === strpos(basename($fajl) , $p) || 0 === strpos($xml -> email , $p)) {
				$data[] = pathinfo($fajl, PATHINFO_FILENAME) . '  ' .$xml -> email;
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