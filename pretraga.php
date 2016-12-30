<?php

$izlaz = '';

if(isset($_POST['vrijednost'])){

		$p = $_POST['vrijednost'];

		$data = array();

		$fajlovi = glob('korisnici/*.xml');
		$i = 0;
		foreach($fajlovi as $fajl){
			$xml = new SimpleXMLElement($fajl , 0 , true);
			if($i < 10 && (0 === strpos(basename($fajl) , $p) || 0 === strpos($xml -> email , $p))) {
				$data[] = pathinfo($fajl, PATHINFO_FILENAME) . '  ' .$xml -> email;
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