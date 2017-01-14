<?php
	
	$dbname = "wt";
	$servername = "localhost";
	$username = "admin";
	$password = "admin";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
   		die("Connection failed: " . mysqli_connect_error());
	}

	if(isset($_GET['login'])){
		header('Location: login.php');
		die;
	}

	if(isset($_GET['logout'])){
		session_start();
		session_destroy();
		header('Location: shop.php');
		die;
	}

	if(isset($_GET['kupiButton'])){
		
		#print_r('semin');
		$artikli = $_GET['dodaneStvari1'];
		print_r($artikli);

	}

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Spirala 1</TITLE>
<link rel="stylesheet" type="text/css" href="stilZaShop.css">
<SCRIPT src="shop.js"></SCRIPT>
</HEAD>
<BODY onload="lokalnaPohrana()">

<div class="nav">
      <ul>
        <li class="home"><a href="LiverpoolFC.php">Home</a></li>
        <li class="match"><a href="match.php">Match</a></li>
        <li class="team"><a href="team.php">Team</a></li>
        <li class="shop"><a class="active" href="#">Shop</a></li>
        <li class="club"><a href="club.php">Club</a></li>
      </ul>
</div>

<?php
	session_start();
	if(isset($_SESSION['username'])) {
		echo '
		<form method="get" action="">
			<input type="submit" name="logout" value="Logout" id="logout">
			<a id="userpage" href="index.php">' . $_SESSION['username'] . '</a>
		</form>';

	}
	else echo '
		<form method="get" action="">
			<input type="submit" name="login" value="Login" id="login">
		</form>';

?>

<div id="vijesti">
	<p id="tekst">MENS FASHION</p>
	<div id="zaDugmadi">
		<Button id="dugme">Back</Button>	
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://i3.liverpoolecho.co.uk/incoming/article11129524.ece/ALTERNATES/s615/JS86406148.jpg">
		</div>
		<div id="naslov">
			<p>Philippe Coutinho</p>
		</div>
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://e1.365dm.com/16/02/16-9/20/jurgen-klopp-liverpool-thumbs-up_3412823.jpg?20160208152020">
		</div>
		<div id="naslov">
			<p>Jürgen Klopp</p>
		</div>
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://i.dailymail.co.uk/i/pix/2016/03/12/11/31E27B8600000578-3488979-image-a-37_1457781188985.jpg">
		</div>
		<div id="naslov">
			<p>Steven Gerrard</p>
		</div>
	</div>
	<div id="zaDugmadi">	
		<Button id="dugme">Next</Button>
	</div>
</div>


<div id="vijesti">
	<p id="tekst">WOMENS FASHION</p>
	<div id="zaDugmadi">
		<Button id="dugme">Back</Button>	
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://i3.liverpoolecho.co.uk/incoming/article11129524.ece/ALTERNATES/s615/JS86406148.jpg">
		</div>
		<div id="naslov">
			<p>Philippe Coutinho</p>
		</div>
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://e1.365dm.com/16/02/16-9/20/jurgen-klopp-liverpool-thumbs-up_3412823.jpg?20160208152020">
		</div>
		<div id="naslov">
			<p>Jürgen Klopp</p>
		</div>
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://i.dailymail.co.uk/i/pix/2016/03/12/11/31E27B8600000578-3488979-image-a-37_1457781188985.jpg">
		</div>
		<div id="naslov">
			<p>Steven Gerrard</p>
		</div>
	</div>
	<div id="zaDugmadi">	
		<Button id="dugme">Next</Button>
	</div>
</div>

<div id="vijesti">
	<p id="tekst">KIDS FASHION</p>
	<div id="zaDugmadi">
		<Button id="dugme">Back</Button>	
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://i3.liverpoolecho.co.uk/incoming/article11129524.ece/ALTERNATES/s615/JS86406148.jpg">
		</div>
		<div id="naslov">
			<p>Philippe Coutinho</p>
		</div>
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://e1.365dm.com/16/02/16-9/20/jurgen-klopp-liverpool-thumbs-up_3412823.jpg?20160208152020">
		</div>
		<div id="naslov">
			<p>Jürgen Klopp</p>
		</div>
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://i.dailymail.co.uk/i/pix/2016/03/12/11/31E27B8600000578-3488979-image-a-37_1457781188985.jpg">
		</div>
		<div id="naslov">
			<p>Steven Gerrard</p>
		</div>
	</div>
	<div id="zaDugmadi">	
		<Button id="dugme">Next</Button>
	</div>
</div>

<div id="vijesti">
	<div id="kupi">
		<p id="t">MENS FASHION</p>
		<form method="get" action="">
			 <select id="cars" name="artikli1">
    				
    				<?php

    					#$xml = new SimpleXMLElement('artikli/mensfashion.xml' , 0 , true);
    					#foreach ($xml -> artikal as $a) {
    					#	echo '<option value="'. $a .'">' . $a . '</option>';
    					#}

    					#Spirala 4
    					$rezultati = "select * from mensfashion;";
    					$rezultati = $conn->query($rezultati);
    					foreach ($rezultati as $r) {
    						echo '<option value="'. $r['artikal'] .'">' . $r['artikal'] . '</option>';
    					}

    				?>

 			 </select>
		<br><br>
	        <button type="button" id="dodaj" onclick="dodajMensFashion()">Add</button>
			<textarea id="dodaneStvari1" rows="10" cols="15" name="dodaneStvari1"></textarea>
			<button type="button" id="kupiButton" name="kupiButtonM" onclick="kupiMensFashion()">Buy</button>
				
		</form>
	</div>
	<div id="kupi">
		<p id="t">WOMENS FASHION</p>
		<form action="action_page.php">
			 <select id="cars" name="artikli2">
    				
			 		<?php

    					#$xml = new SimpleXMLElement('artikli/womensfashion.xml' , 0 , true);
    					#foreach ($xml -> artikal as $a) {
    					#	echo '<option value="'. $a .'">' . $a . '</option>';
    					#}

			 			#Spirala 4
    					$rezultati = "select * from womensfashion;";
    					$rezultati = $conn->query($rezultati);
    					foreach ($rezultati as $r) {
    						echo '<option value="'. $r['artikal'] .'">' . $r['artikal'] . '</option>';
    					}

    				?>

 			 </select>
		<br><br>
	        <button type="button" id="dodaj" onclick="dodajWomensFashion()">Add</button>
		<textarea id="dodaneStvari" rows="10" cols="15" name="dodaneStvari2"></textarea>
		<button type="button" id="kupiButton" onclick="kupiWomensFashion()">Buy</button>		
		</form>
	</div>
	<div id="kupi">
		<p id="t">KIDS FASHION</p>
		<form action="action_page.php">
			 <select id="cars" name="artikli3">

    				<?php

    					#$xml = new SimpleXMLElement('artikli/kidsfashion.xml' , 0 , true);
    					#foreach ($xml -> artikal as $a) {
    					#	echo '<option value="'. $a .'">' . $a . '</option>';
    					#}

    					#Spirala 4
    					$rezultati = "select * from kidsfashion;";
    					$rezultati = $conn->query($rezultati);
    					foreach ($rezultati as $r) {
    						echo '<option value="'. $r['artikal'] .'">' . $r['artikal'] . '</option>';
    					}

    				?>

 			 </select>
		<br><br>
	        <button type="button" id="dodaj" onclick="dodajKidsFashion()">Add</button>
		<textarea id="dodaneStvari" rows="10" cols="15" name="dodaneStvari3"></textarea>
		<button type="button" id="kupiButton" onclick="kupiKidsFashion()">Buy</button>		
		</form>
	</div>
</div>

</BODY>
</HTML>