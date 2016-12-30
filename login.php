<?php

	$usern = "";
	$passw = ""; 
	$greska = false;

	$errors = array();
	if(isset($_POST['login'])){
		$usern = $_POST['username'];
		$passw = $_POST['password'];
		$username = preg_replace('/[^A-Za-z]/' , '' , $_POST['username']);
		$password = md5($_POST['password']);

		$brojGresaka = 0;
		if($usern == ''){
			$errors[] = 'Username is empty!';
			$brojGresaka++;
		}
		if($passw == ''){
			$errors[] = 'Password is empty!';
			$brojGresaka++;	
		}

		if(file_exists('korisnici/' . $username . '.xml')){
			$xml = new SimpleXMLElement('korisnici/' . $username . '.xml' , 0 , true);
			if($password == $xml -> password){
				session_start();
				$_SESSION['username'] = $username;
				header('Location: index.php');
				die;
			}
		}
		if($brojGresaka == 0){
			$errors[] = 'Wrong username or password!';
		}
		$greska = true;
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="stilZaLogin.css">
	<SCRIPT src="login.js"></SCRIPT>
</head>

<body>

	<div id="login">
		<h1>Login:</h1>
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
			<?php echo '<p>Username <input type="text" name="username" size="20" id="username" value="'. $usern .'" /></p>'; ?>
			<p>Password <input type="password" name="password" size="20" id="password" /></p>
			<p><input type="submit" value="Login" name="login" id="loginB" /></p>
		</form>
		<a href="register.php" id="a1">Register</a>
		<a href="LiverpoolFC.php" id="a2">Nazad</a>
	</div>

</body>
</html>

<?php

	if($greska){
		echo '<script> 
						provjera();
			      </script>';
	}

?>