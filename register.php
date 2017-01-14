<?php
	
	$usern = "";
	$email = "";

	$dbname = "wt";
	$servername = "localhost";
	$username = "admin";
	$password = "admin";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	$errors = array();
	if(isset($_POST['login'])){
		$username = preg_replace('/[^A-Za-z]/' , '' , $_POST['username']);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$usern = $_POST['username'];

		if($usern == ''){
			$errors[] = 'Username is empty!';	
		}
		else if(strlen($username) < 3){
			$errors[] = 'Username must have a minimum of three letters!';
		}
		#$fajlovi = glob('korisnici/*.xml');
		#foreach ($fajlovi as $fajl) {
		#	$xml = new SimpleXMLElement($fajl , 0 , true);
		#	if(basename($fajl) == $usern . '.xml'){
		#		$errors[] = 'Username already exists!';	
		#	}
		#	if($xml -> email == $email){
		#		$errors[] = 'Email already exists!';
		#	}
		#}

		#Spirala 4
		$rezultat = "select * from korisnik;";
		$rezultat = $conn->query($rezultat);
		foreach ($rezultat as $r) {
			if($r['username'] == $usern){
				$errors[] = 'Username already exists!';	
			}
			if($r['email'] == $email){
				$errors[] = 'Email already exists!';
			}
		}

		if($email == ''){
			$errors[] = 'Email is empty!';
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[] = 'Email not valid!';
		}
		if($password == ''){
			$errors[] = 'Password is empty!';
		}
		else if(strlen($password) < 5){
			$errors[] = 'Password must have a minimum of five letters!';
		}
		else if($confirmPassword == ''){
			$errors[] = 'Confirm password is empty!';
		}
		else if($password != $confirmPassword){
			$errors[] = 'Passwords does not match!';
		}
		

		#if(count($errors) == 0){
		#	$xml = new SimpleXMLElement('<korisnik></korisnik>');
		#	$xml -> addChild('password' , md5($password));
		#	$xml -> addChild('email' , $email);
		#	$xml -> asXML('korisnici/' . $usern . '.xml');
		#	header('Location: login.php');
		#	die;
		#}

		#Spirala 4
		if(count($errors) == 0){
			$pass = md5($password);
			$rezultat = "insert into korisnik (id , username , email , password) values (null , '$usern' , '$email' , '$pass');";
			$rezultat = $conn->query($rezultat);
			header('Location: login.php');
			die;
		}
		

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="stilZaRegister.css">
	<SCRIPT src="register.js"></SCRIPT>

</head>

<body>
	<div id="register">
	<h1>Register</h1>
	<form method="post" action="">
		<?php
			if(count($errors) > 0){
				echo '<ul>';
				foreach($errors as $e){
					echo '<li>' . $e . '</li>';
				}
				echo '</ul>';
			}
		?>
		<?php echo'
		<p>Username: <input type="text" name="username" size="20" id="username" value="' . $usern . '"/></p>
		<p>Email: <input type="text" name="email" size="20" id="email" value="' . $email . '"/></p>
		<p>Password: <input type="password" name="password" size="20" id="password" /></p>
		<p>Confirm password: <input type="password" name="confirmPassword" size="20" id="confirmPassword" /></p>
		<p> <input type="submit" value="Login" name="login" id="login"></p>';
		?>
	</form>

	<a href="login.php" id="a1">Nazad</a>
	</div>

</body>
</html>

<?php 
	
	if(count($errors) > 0){
		echo '<script> 
					provjera();
		  	  </script>';
	}

?>