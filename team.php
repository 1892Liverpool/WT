<?php
	session_start();

	if(isset($_GET['login'])){
		header('Location: login.php');
		die;
	}

	if(isset($_GET['logout'])){
		session_start();
		session_destroy();
		header('Location: team.php');
		die;
	}

	if(isset($_POST['search'])){
		$xml = new SimpleXMLElement('<korisnik></korisnik>');
		$xml -> addChild('tekst' , $_POST['imeT']);
		if(session_status() == PHP_SESSION_NONE){
			$xml -> asXML('pretrage/anonymous.xml');
		}
		else {
			$xml -> asXML('pretrage/' . $_SESSION['username'] . '.xml');
		}
	}

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Spirala 1</TITLE>
<link rel="stylesheet" type="text/css" href="stilZaTeam.css">
<SCRIPT src="team.js"></SCRIPT>
</HEAD>
<BODY onload="lokalnaPohrana()">

<div class="nav">
      <ul>
        <li class="home"><a href="LiverpoolFC.php">Home</a></li>
        <li class="match"><a href="match.php">Match</a></li>
        <li class="team"><a class="active" href="#">Team</a></li>
        <li class="shop"><a href="shop.php">Shop</a></li>
        <li class="club"><a href="club.php">Club</a></li>
      </ul>
</div>

<?php
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

<div id="slika">
	<img src="http://assets.lfcimages.com/v2/uploads/media/page_banner/0001/28/thumb_27978_page_banner_header_large.jpeg">
</div>

<div id="vijesti">
	<p id="tekst">GOALKEEPERS</p>
	<div id="zaDugmadi">
		<Button id="dugme">Back</Button>	
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://vignette2.wikia.nocookie.net/liverpoolfc/images/d/d1/LKarius.jpg/revision/latest?cb=20160813025558">
		</div>
		<div id="naslov">
			<p>Loris Karius</p>
		</div>
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://lfcstats.co.uk/simonmignolet1314.jpg">
		</div>
		<div id="naslov">
			<p>Simon Mignolet</p>
		</div>
	</div>
	<div id="kontenjer">
		<div id="slika">
			<img src="http://assets.lfcimages.com/v2/uploads/media/misc/0001/26/87e90bac4a6cc490713aba58df7474d6f2cc9a23.jpeg">
		</div>
		<div id="naslov">
			<p>Alex Manninger</p>
		</div>
	</div>
	<div id="zaDugmadi">	
		<Button id="dugme">Next</Button>
	</div>
</div>

<div id="vijesti">
	<p id="tekst">DEFENDERS</p>
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
	<p id="tekst">MIDFIELDERS</p>
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
	<p id="tekst">FORWARDS</p>
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
	<div id="podaci">
		<p id="pretrazivanje">Search player<p>
		<form method="post" action="">
  			<p id="ime">Name:</p>
 			<input type="text" id="imeT" name="imeT"><br>
			<p id="poruka">X<p>
			<button type="submit" id="search" onclick="pritisnuto()" name="search">Search</button>
		</form>
	</div>
	<div id="podaci">
		<p id="pretrazivanje">Player name<p>
		<div id="slikaP">
		</div>
	</div>
	<div id="podaci">
		<p id="pretrazivanje">Player info<p>
		<p>Neki tekst o igracu</p>
	</div>
</div>

</BODY>
</HTML>