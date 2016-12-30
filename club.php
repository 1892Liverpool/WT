<?php
	
	if(isset($_GET['login'])){
		header('Location: login.php');
		die;
	}

	if(isset($_GET['logout'])){
		session_start();
		session_destroy();
		header('Location: club.php');
		die;
	}

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Spirala 1</TITLE>
<link rel="stylesheet" type="text/css" href="stilZaClub.css">
</HEAD>
<BODY>

<div class="nav">
      <ul>
        <li class="home"><a href="LiverpoolFC.php">Home</a></li>
        <li class="match"><a href="match.php">Match</a></li>
        <li class="team"><a href="team.php">Team</a></li>
        <li class="shop"><a href="shop.php">Shop</a></li>
        <li class="club"><a class="active" href="#">Club</a></li>
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

<div id="historija">
	<p id="naslov">History</p>
	<p>Ovdje ce biti tekst</p>
</div> 

</BODY>
</HTML>