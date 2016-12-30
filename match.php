<?php
	
	if(isset($_GET['login'])){
		header('Location: login.php');
		die;
	}

	if(isset($_GET['logout'])){
		session_start();
		session_destroy();
		header('Location: match.php');
		die;
	}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Spirala 1</TITLE>
<link rel="stylesheet" type="text/css" href="stilZaMatch.css">
</HEAD>
<BODY>

<div class="nav">
      <ul>
        <li class="home"><a href="LiverpoolFC.php">Home</a></li>
        <li class="match"><a class="active" href="#">Match</a></li>
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
			<tr id="red">
				<th>8 Manchester Utd</th>
				<th>10</th>
				<th>15</th>
			</tr>
			<tr>
				<th>9 Southampton</th>
				<th>10</th>
				<th>13</th>
			</tr>
			<tr id="red">
				<th>10 Bournemouth</th>
				<th>10</th>
				<th>12</th>
			</tr>
			<tr>
				<th>11 Leicester</th>
				<th>10</th>
				<th>12</th>
			</tr>
			<tr id="red">
				<th>12 Stoke</th>
				<th>10</th>
				<th>12</th>
			</tr>
			<tr>
				<th>13 Crystal Palace</th>
				<th>10</th>
				<th>11</th>
			</tr>
			<tr id="red">
				<th>14 Burnley</th>
				<th>10</th>
				<th>11</th>
			</tr>
			<tr>
				<th>15 Middlesbroug</th>
				<th>10</th>
				<th>10</th>
			</tr>
			<tr id="red">
				<th>16 WBA</th>
				<th>10</th>
				<th>10</th>
			</tr>
			<tr>
				<th>17 West Ham</th>
				<th>10</th>
				<th>10</th>
			</tr>
			<tr id="red">
				<th>18 Hull</th>
				<th>10</th>
				<th>7</th>
			</tr>
			<tr>
				<th>19 Swansea</th>
				<th>10</th>
				<th>5</th>
			</tr>
			<tr id="red">
				<th>20 Sunderland</th>
				<th>10</th>
				<th>2</th>
			</tr>
		</table>

</div>
	<div id="sljedecaUtakmica">
			<p id="utakmica">UPCOMING</p>
			<div id="domacin"></div>
			<div id="gost"></div>		
	 		<p id="podaciOUtakmici">Liverpool vs Watford</p>
  	</div>

	<div id="sljedeceUtakmice">
		<table id="fixtures">
			<tr id="red">
				<th>Date</th>
				<th>Team</th>
				<th>Home/Away</th>
			</tr>
			<tr>
				<th>Sun 6th 14:15</th>
				<th>Watford</th>
				<th>H</th>
			</tr>
			<tr id="red">
				<th>Sat 19th 15:00</th>
				<th>Southampton</th>
				<th>A</th>
			</tr>
			<tr>
				<th>Sat 26th 15:00</th>
				<th>Sunderland</th>
				<th>H</th>
			</tr>
			<tr id="red">
				<th>Tue 29th 19:45</th>
				<th>Leeds United</th>
				<th>H</th>
			</tr>
			<tr>
				<th>Sun 4th 13:30</th>
				<th>Bournemouth</th>
				<th>A</th>
			</tr>
			<tr id="red">
				<th>Sun 11th 16:30</th>
				<th>West Ham United</th>
				<th>A</th>
			</tr>
			<tr>
				<th>Wed 14th 19:45</th>
				<th>Middlesbrough</th>
				<th>A</th>
			</tr>
			<tr id="red">
				<th>Mon 19th 20:00</th>
				<th>Everton</th>
				<th>A</th>
			</tr>
		</table>
	</div>


</BODY>
</HTML>