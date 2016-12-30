<?php
	
	$izlaz = '';

	$emailp = "";
	$artikalmp = "";
	$changemp = "";
	$artikalwp = "";
	$changewp = "";
	$artikalkp = "";
	$changekp = "";

	session_start();
	if(!file_exists('korisnici/' . $_SESSION['username'] . '.xml')){
		header('Location: LiverpoolFC.php');
		die;
	}

	$errorsEmail = array();
	if(isset($_POST['delete'])){
		$email = $_POST['email'];
		$emailp = $email;
		if($email == ""){
			$errorsEmail[] = 'Email is empty!';
		}

		$files = glob('korisnici/*.xml');
			$i = 0;
			foreach($files as $file){
				$xml = new SimpleXMLElement($file , 0 , true);
				if($email == $xml -> email && basename($file , '.xml') != 'admin'){
					$i++;
					unlink($file);
				}
			}
			if($i == 0 && count($errorsEmail) == 0){
				$errorsEmail[] = 'Entered email does not exist!';
			}
			if($i > 0){
				$emailp = "";
			}
	}


	$errorsMens = array();
	if(isset($_POST['addArtikalm'])){

		$artikal = $_POST['artikalm'];
		$artikalmp = $artikal;

		if($artikal == ""){
			$errorsMens[] = 'Item is empty!';
		}
		else if (preg_match('/[^A-Za-z ]/', $artikal)){
			$errorsMens[] = 'Item must contain only letters!';
		}
		else {
			$xml = new SimpleXMLElement('<artikli></artikli>');
			$xml2 = new SimpleXMLElement('artikli/mensfashion.xml' , 0 , true);
			foreach($xml2 -> artikal as $a){
				$xml -> addChild('artikal' , $a);
			}
			$xml -> addChild('artikal' , $_POST['artikalm']);
			$xml -> asXML('artikli/mensfashion.xml');
			$artikalmp = "";
		}

		
	}

	if(isset($_POST['deleteArtikalm'])){
		$artikal = $_POST['artikalm'];
		$artikalmp = $artikal;

		if($artikal == ""){
			$errorsMens[] = 'Item is empty!';
		}

		$ima = false;
		$xml = new SimpleXMLElement('<artikli></artikli>');
		$xml2 = new SimpleXMLElement('artikli/mensfashion.xml' , 0 , true);
		foreach($xml2 -> artikal as $a){
			if($artikal != $a){
				$xml -> addChild('artikal' , $a);
			}
			else {
				$ima = true;
				$artikalmp = "";
			}
		}
		$xml -> asXML('artikli/mensfashion.xml');
		if(!$ima && count($errorsMens) == 0){
			$errorsMens[] = 'Item not found!';
		}	
		
	}

	$errorsWomen = array();
    if(isset($_POST['addArtikalw'])){

    	$artikal = $_POST['artikalw'];
    	$artikalwp = $artikal;

		if($artikal == ""){
			$errorsWomen[] = 'Item is empty!';
		}
		else if (preg_match('/[^A-Za-z ]/', $artikal)){
			$errorsWomen[] = 'Item must contain only letters!';
		}
		else {
			$xml = new SimpleXMLElement('<artikli></artikli>');
			$xml2 = new SimpleXMLElement('artikli/womensfashion.xml' , 0 , true);
			foreach($xml2 -> artikal as $a){
				$xml -> addChild('artikal' , $a);
			}
			$xml -> addChild('artikal' , $_POST['artikalw']);
			$xml -> asXML('artikli/womensfashion.xml');
			$artikalwp = "";
		}

		
	}

	if(isset($_POST['deleteArtikalw'])){
		$artikal = $_POST['artikalw'];
		$artikalwp = $artikal;

		if($artikal == ""){
			$errorsWomen[] = 'Item is empty!';
		}

		$ima = false;
		$xml = new SimpleXMLElement('<artikli></artikli>');
		$xml2 = new SimpleXMLElement('artikli/womensfashion.xml' , 0 , true);
		foreach($xml2 -> artikal as $a){
			if($artikal != $a){
				$xml -> addChild('artikal' , $a);
			}
			else {
				$ima = true;
				$artikalwp = "";
			}
		}
		$xml -> asXML('artikli/womensfashion.xml');	
		if(!$ima && count($errorsWomen) == 0){
			$errorsWomen[] = 'Item not found!';
		}
		
	}

	$errorsKid = array();
	if(isset($_POST['addArtikalk'])){

		$artikal = $_POST['artikalk'];
		$artikalkp = $artikal;

		if($artikal == ""){
			$errorsKid[] = 'Item is empty!';
		}
		else if (preg_match('/[^A-Za-z ]/', $artikal)){
			$errorsKid[] = 'Item must contain only letters!';
		}
		else {
			$xml = new SimpleXMLElement('<artikli></artikli>');
			$xml2 = new SimpleXMLElement('artikli/kidsfashion.xml' , 0 , true);
			foreach($xml2 -> artikal as $a){
				$xml -> addChild('artikal' , $a);
			}
			$xml -> addChild('artikal' , $_POST['artikalk']);
			$xml -> asXML('artikli/kidsfashion.xml');
			$artikalkp = "";
		}

		
	}

	if(isset($_POST['deleteArtikalk'])){
		$artikal = $_POST['artikalk'];
		$artikalkp = $artikal;

		if($artikal == ""){
			$errorsKid[] = 'Item is empty!';
		}

		$ima = false;
		$xml = new SimpleXMLElement('<artikli></artikli>');
		$xml2 = new SimpleXMLElement('artikli/kidsfashion.xml' , 0 , true);
		foreach($xml2 -> artikal as $a){
			if($artikal != $a){
				$xml -> addChild('artikal' , $a);
			}
			else {
				$ima = true;
				$artikalkp = "";
			}
		}
		$xml -> asXML('artikli/kidsfashion.xml');
		if(!$ima && count($errorsKid) == 0){
			$errorsKid[] = 'Item not found!';
		}	
		
	}

	$errorsChangeMen = array();
	if(isset($_POST['changem'])){
		$artikal = $_POST['artikalm'];
		$artikalmp = $artikal;

		if($artikal == ""){
			$errorsMens[] = 'Item is empty!';
		}

		$izmjena = $_POST['izmjenam'];
		$changemp = $izmjena;

		if($izmjena == ""){
			$errorsChangeMen[] = 'Item is empty!';
		}
		else if (preg_match('/[^A-Za-z ] /', $izmjena)){
			$errorsChangeMen[] = 'Item must contain only letters!';
		}

		$ima = false;
		$xml = new SimpleXMLElement('<artikli></artikli>');
		$xml2 = new SimpleXMLElement('artikli/mensfashion.xml' , 0 , true);
		foreach($xml2 -> artikal as $a){
			if($artikal != $a){
				$xml -> addChild('artikal' , $a);
			}
			else {

				if($izmjena != "" && !preg_match('/[^A-Za-z ]/', $izmjena)){
					$xml -> addChild('artikal' , $izmjena);
					$changemp = "";
					$artikalmp = "";
				}
				else {
					$xml -> addChild('artikal' , $a);	
				}
				
				$ima = true;
			}
		}
		$xml -> asXML('artikli/mensfashion.xml');
		if(!$ima && count($errorsMens) == 0){
			$errorsMens[] = 'Item not found!';
		}
	}

	$errorsChangeWomen = array();
	if(isset($_POST['changew'])){
		$artikal = $_POST['artikalw'];
		$artikalwp = $artikal;

		if($artikal == ""){
			$errorsWomen[] = 'Item is empty!';
		}

		$izmjena = $_POST['izmjenaw'];
		$changewp = $izmjena;

		if($izmjena == ""){
			$errorsChangeWomen[] = 'Item is empty!';
		}
		else if (preg_match('/[^A-Za-z ]/', $izmjena)){
			$errorsChangeWomen[] = 'Item must contain only letters!';
		}

		$ima = false;
		$xml = new SimpleXMLElement('<artikli></artikli>');
		$xml2 = new SimpleXMLElement('artikli/womensfashion.xml' , 0 , true);
		foreach($xml2 -> artikal as $a){
			if($artikal != $a){
				$xml -> addChild('artikal' , $a);
			}
			else {

				if($izmjena != "" && !preg_match('/[^A-Za-z ]/', $izmjena)){
					$xml -> addChild('artikal' , $izmjena);
					$changewp = "";
					$artikalwp = "";
				}
				else {
					$xml -> addChild('artikal' , $a);	
				}
				
				$ima = true;

			}
		}
		$xml -> asXML('artikli/womensfashion.xml');
		if(!$ima && count($errorsWomen) == 0){
			$errorsWomen[] = 'Item not found!';
		}
	}

	$errorsChangeKid = array();
	if(isset($_POST['changek'])){
		$artikal = $_POST['artikalk'];
		$artikalkp = $artikal;

		if($artikal == ""){
			$errorsKid[] = 'Item is empty!';
		}

		$izmjena = $_POST['izmjenak'];
		$changekp = $izmjena;

		if($izmjena == ""){
			$errorsChangeKid[] = 'Item is empty!';
		}
		else if (preg_match('/[^A-Za-z ]/', $izmjena)){
			$errorsChangeKid[] = 'Item must contain only letters!';
		}

		$ima = false;
		$xml = new SimpleXMLElement('<artikli></artikli>');
		$xml2 = new SimpleXMLElement('artikli/kidsfashion.xml' , 0 , true);
		foreach($xml2 -> artikal as $a){
			if($artikal != $a){
				$xml -> addChild('artikal' , $a);
			}
			else {

				if($izmjena != "" && !preg_match('/[^A-Za-z ]/', $izmjena)){
					$xml -> addChild('artikal' , $izmjena);
					$changekp = "";
					$artikalkp = "";
				}
				else {
					$xml -> addChild('artikal' , $a);	
				}
				
				$ima = true;
			}
		}
		$xml -> asXML('artikli/kidsfashion.xml');
		if(!$ima && count($errorsKid) == 0){
			$errorsKid[] = 'Item not found!';
		}
	}

	if(isset($_POST['download'])){
		

		header('Content-Type: text/csv; charset = utf-8');
		header('Content-Disposition: attachment; filename = Items.csv');
		$csv = fopen('php://output', 'w');
		$xml = new SimpleXMLElement('artikli/mensfashion.xml' , 0 , true);
		$row = array('Item' , 'Item type');
		fputcsv($csv , $row , ',');
		foreach ($xml -> artikal as $a) {
			$row = array($a , 'Men');
			fputcsv($csv , $row , ',');
		}

		$xml = new SimpleXMLElement('artikli/womensfashion.xml' , 0 , true);
		foreach ($xml -> artikal as $a) {
			$row = array($a , 'Women');
			fputcsv($csv , $row , ',');
		}

		$xml = new SimpleXMLElement('artikli/kidsfashion.xml' , 0 , true);
		foreach ($xml -> artikal as $a) {
			$row = array($a , 'Kid');
			fputcsv($csv , $row , ',');
		}

		exit();

	}

		

	if(isset($_POST['generate'])){
		require('fpdf181/fpdf.php');
		$pdf = new FPDF();
		$pdf -> addPage();

		$i = 17;
		
		$xml = new SimpleXMLElement('artikli/mensfashion.xml' , 0 , true);
		$pdf -> SetFont('Arial' , 'B' , 12);
		$pdf -> SetXY(4 , 10);
		$pdf -> Write(0 , 'Men items:');
		$pdf -> SetFont('Arial' , 'I' , 12);
    	foreach ($xml -> artikal as $a) {
    		$pdf->SetXY(4, $i);
			$pdf->Write(0, $a);
    		if($i > 260){
    			$pdf -> addPage();
    			$i = 17;
    		}
    		$i = $i + 7;
    	}

    	$xml = new SimpleXMLElement('artikli/womensfashion.xml' , 0 , true);
		$pdf -> SetFont('Arial' , 'B' , 12);
		$pdf -> SetXY(4 , $i);
		$pdf -> Write(0 , 'Women items:');
		$pdf -> SetFont('Arial' , 'I' , 12);
		$i = $i + 7;
    	foreach ($xml -> artikal as $a) {
    		$pdf->SetXY(4, $i);
			$pdf->Write(0, $a);
    		if($i > 260){
    			$pdf -> addPage();
    			$i = 17;
    		}
    		$i = $i + 7;
    	}
    	
    	$xml = new SimpleXMLElement('artikli/kidsfashion.xml' , 0 , true);
		$pdf -> SetFont('Arial' , 'B' , 12);
		$pdf -> SetXY(4 , $i);
		$pdf -> Write(0 , 'Women items:');
		$pdf -> SetFont('Arial' , 'I' , 12);
		$i = $i + 7;
    	foreach ($xml -> artikal as $a) {
    		$pdf->SetXY(4, $i);
			$pdf->Write(0, $a);
    		if($i > 260){
    			$pdf -> addPage();
    			$i = 17;
    		}
    		$i = $i + 7;
    	}
    	
		$pdf -> output();
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>User page</title>
	<link rel="stylesheet" type="text/css" href="stilZaIndex.css">
	<SCRIPT src="index.js"></SCRIPT>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">


	function searchq(){ 

		var tekst = $("input[name='pretraga']").val();
		if(tekst != ""){
			$.post("pretraga.php" , {vrijednost: tekst} , function(izlaz) {
				$("#rezultatPretrage").html(izlaz); 
			});
		}

	}

	</script>

	<script type="text/javascript">


	function Prikazi(){ 

		var tekst = $("input[name='pretraga']").val();
		if(tekst != ""){
			$.post("pretragaSve.php" , {vrijednost: tekst} , function(izlaz) {
				$("#rezultatPretrage").html(izlaz); 
			});
		}

	}

	</script>


</head>

<body>
	<div id="naslov">
		<h1 id="userpage">User page</h1>
		<h2 id="welcome">Welcome, <?php echo $_SESSION['username']; ?> </h2>
	</div>
	<?php 	

		if($_SESSION['username'] == 'admin'){

			echo '<div id="ispisKorisnika"><table id="email">
				<tr>
					<th>Username</th>
					<th>Email</th>';

				
						$files = glob('korisnici/*.xml');
						foreach($files as $file){
							$xml = new SimpleXMLElement($file , 0 , true);
							echo '
							<tr> 
								<td>' . basename($file , '.xml') . '</td>
								<td>' . $xml -> email . '</td>
							</tr>';
						}
					
			    
			echo '</tr> 
			</table>';

			if(count($errorsEmail) > 0){
				echo '<p>' . $errorsEmail[0] . '</p>';
 			}

			echo '<form method="post" action="">';
			echo '<p>Email: <input type="text" name="email" size="20" value="'. $emailp . '" id="email_t"/></p>';
			echo '<p><input type="submit" value="Delete" name="delete"/></p>';
			echo '</form></div>';
		}

		echo '<div id="ispisArtikala"><div id="mens"><table id="mensTabela">
				<tr>
					<th>Mens fashion</th>';

						$xml = new SimpleXMLElement('artikli/mensfashion.xml' , 0 , true);
    					foreach ($xml -> artikal as $a) {
    						echo '<tr>
    							<td>' . $a . '</td>
    						</tr>';
    					}

			echo '</tr> 
		</table>';

		if($_SESSION['username'] == 'admin'){

			if(count($errorsMens) > 0){
				echo '<p>' . $errorsMens[0] . '</p>';
 			}

			echo '<form method="post" action="">';
			echo '<p><input type="text" name="artikalm" size="20" value="'. $artikalmp . '" id="artikalm"/></p>';
			echo '<input type="submit" value="Delete" name="deleteArtikalm" id="delete" />';
			echo '<input type="submit" value="Add" name="addArtikalm" id="add" />';

			if(count($errorsChangeMen) > 0){
				echo '<p>' . $errorsChangeMen[0] . '</p>';
 			}

			echo '<p><input type="text" name="izmjenam" size="20" value="'. $changemp . '" id="changem"/></p>';
			echo '<p><input type="submit" value="Change" name="changem" /></p>';
			echo '</form>';
		}

		echo '</div>';

		echo '<div id="womens"><table id="womensTable">
				<tr>
					<th>Womens fashion</th>';

						$xml = new SimpleXMLElement('artikli/womensfashion.xml' , 0 , true);
    					foreach ($xml -> artikal as $a) {
    						echo '<tr>
    							<td>' . $a . '</td>
    						</tr>';
    					}

			echo '</tr> 
		</table>';

		if($_SESSION['username'] == 'admin'){

			if(count($errorsWomen) > 0){
				echo '<p>' . $errorsWomen[0] . '</p>';
 			}

			echo '<form method="post" action="">';
			echo '<p><input type="text" name="artikalw" size="20" value="'. $artikalwp . '" id="artikalw"/></p>';
			echo '<input type="submit" value="Delete" name="deleteArtikalw" id="delete" />';
			echo '<input type="submit" value="Add" name="addArtikalw" id="add" />';

			if(count($errorsChangeWomen) > 0){
				echo '<p>' . $errorsChangeWomen[0] . '</p>';
 			}


			echo '<p><input type="text" name="izmjenaw" size="20" value="'. $changewp . '" id="changew"/></p>';
			echo '<p><input type="submit" value="Change" name="changew" /></p>';
			echo '</form>';
		}
		echo '</div>';

		echo '<div id="kids"><table id="kidsTable">
				<tr>
					<th>Kids fashion</th>';

						$xml = new SimpleXMLElement('artikli/kidsfashion.xml' , 0 , true);
    					foreach ($xml -> artikal as $a) {
    						echo '<tr>
    							<td>' . $a . '</td>
    						</tr>';
    					}

			echo '</tr> 
		</table>';

		if($_SESSION['username'] == 'admin'){

			if(count($errorsKid) > 0){
				echo '<p>' . $errorsKid[0] . '</p>';
 			}

			echo '<form method="post" action="">';
			echo '<p><input type="text" name="artikalk" size="20" value="'. $artikalkp . '" id="artikalk"/></p>';
			echo '<input type="submit" value="Delete" name="deleteArtikalk" id="delete" />';
			echo '<input type="submit" value="Add" name="addArtikalk" id="add" />';

			if(count($errorsChangeKid) > 0){
				echo '<p>' . $errorsChangeKid[0] . '</p>';
 			}

			echo '<p><input type="text" name="izmjenak" size="20" value="'. $changekp . '" id="changek"/></p>';
			echo '<p><input type="submit" value="Change" name="changek"/></p>';
			echo '</form>';
		}
		echo '</div></div>';
		
	?>
	<div id="pretraga">
		<form action="index.php" method="post">
			<input type="text" name="pretraga" id="pret" placeholder="Search users..." onkeyup="searchq();"><br>
			<input type="button" value="Search" id="search" onclick="Prikazi();" />
		</form>

		<div id="rezultatPretrage">

		</div>
	</div>

	<hr/>
	<?php

		if($_SESSION['username'] == 'admin'){
			echo '
			<form method="post" action="">
			<input type="submit" value="DownloadCSV" name="download" id="download" />
			<input type="submit" value="GeneratePDF" name="generate" id="generate" />
			</form>	';
		}

	?>

	<a href="changePassword.php" id="changePassword">Change password</a>
	<br>
	<a href="logout.php" id="logout">Logout</a>
	<br>
	<a href="LiverpoolFC.php" id="nazad">Nazad</a>


</body>
</html>

<?php

	if(count($errorsEmail) > 0){
		echo '<script> 
						provjeraEmail();
			      </script>';
	}

	if(count($errorsMens) > 0){
		echo '<script> 
						provjeraArtiklaM();
			      </script>';
	}

	if(count($errorsChangeMen) > 0){
		echo '<script> 
						provjeraChangeM();
			      </script>';
	}

	if(count($errorsWomen) > 0){
		echo '<script> 
						provjeraArtiklaW();
			      </script>';
	}

	if(count($errorsChangeWomen) > 0){
		echo '<script> 
						provjeraChangeW();
			      </script>';
	}

	if(count($errorsKid) > 0){
		echo '<script> 
						provjeraArtiklaK();
			      </script>';
	}

	if(count($errorsChangeKid) > 0){
		echo '<script> 
						provjeraChangeK();
			      </script>';
	}


?>