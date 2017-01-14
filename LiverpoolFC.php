<?php
	
	if(isset($_GET['login'])){
		header('Location: login.php');
		die;
	}
	
	if(isset($_GET['logout'])){
		session_start();
		session_destroy();
		header('Location: LiverpoolFC.php');
		die;
	}


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Spirala 4</TITLE>
<link rel="stylesheet" type="text/css" href="stilZaHome.css">
<SCRIPT src="home.js"></SCRIPT>


</HEAD>
<BODY>

<div class="nav">
      <ul>
        <li class="home"><a class="active" href="#">Home</a></li>
        <li class="match"><a href="match.php">Match</a></li>
        <li class="team"><a href="team.php">Team</a></li>
        <li class="shop"><a href="shop.php">Shop</a></li>
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

<div id="podstranica">

<div id="vijesti">
	<div id="zaDugmadi">
		<Button id="dugme" onclick="lijevo()">Back</Button>	
	</div>
	<div id="kontenjer">
		<div id="slika" name="slika1">
			<img name="img1" src="http://www.squawka.com/news/wp-content/uploads/2016/11/4880149.jpg">
		</div>
		<div id="naslov" name="naslov1">
			<p>Reds go top of Premier League with win </p>
		</div>
	</div>
	<div id="kontenjer">
		<div id="slika" name="slika2">
			<img name="img2" src="http://e1.365dm.com/16/02/16-9/20/jurgen-klopp-liverpool-thumbs-up_3412823.jpg?20160208152020">
		</div>
		<div id="naslov" name="naslov2">
			<p>Jürgen Klopp: I'm really happy, but we can still improve</p>
		</div>
	</div>
	<div id="kontenjer">
		<div id="slika" name="slika3">
			<img name="img3" src="http://cdn-01.belfasttelegraph.co.uk/sport/football/premier-league/article34611290.ece/033ed/AUTOCROP/w620/PANews%20BT_P-c5bb4b00-d3ff-4e1f-a592-5ddfd8bdd51a_I1.jpg">
		</div>
		<div id="naslov" name="naslov3">
			<p>Hendo: We've got nothing yet, we have to keep going</p>
		</div>
	</div>
	<div id="zaDugmadi">	
		<Button id="dugme" onclick=desno()>Next</Button>
	</div>

	<div id="sponzor"></div>
	
	<div id="sljedecaUtakmica">
		<p id="utakmica">UPCOMING</p>
		<div id="domacin"></div>
		<div id="gost"></div>
		<p id="podaciOUtakmici">Liverpool vs Watford</p>		
	</div>

	<div id="tabela">
		
		<table id="t">
			<tr id="red">
				<th>Team</th>
				<th>P</th>
				<th>Pts</th>
			</tr>
			<tr>
				<th>1 Manchester City</th>
				<th>10</th>
				<th>23</th>
			</tr>
			<tr id="red">
				<th>2 Arsenal</th>
				<th>10</th>
				<th>23</th>
			</tr>
			<tr>
				<th id="lfc">3 Liverpool</th>
				<th id="lfc">10</th>
				<th id="lfc">23</th>
			</tr>
			<tr id="red">
				<th>4 Chelsea</th>
				<th>10</th>
				<th>22</th>
			</tr>
			<tr>
				<th>5 Tottenham Hotspur</th>
				<th>10</th>
				<th>20</th>
			</tr>
			<tr id="red">
				<th>6 Everton</th>
				<th>10</th>
				<th>18</th>
			</tr>
			<tr>
				<th>7 Watford</th>
				<th>10</th>
				<th>15</th>
			</tr>
		</table>

	</div>


</div>

</div>

</BODY>
</HTML>