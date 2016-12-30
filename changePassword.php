<?php
	
	session_start();
	if(!file_exists('korisnici/' . $_SESSION['username'] . '.xml')){
		header('Location: login.php');
		die;
	}


	$errors = array();
	if(isset($_POST['changePassword'])){
		$old = md5($_POST['oldPassword']);
		$new = md5($_POST['newPassword']);
		$confirmNew = md5($_POST['confirmNewPassword']);

		$o = $_POST['oldPassword'];
		$n = $_POST['newPassword'];
		$cn = $_POST['confirmNewPassword'];

		$brojGresaka = 0;
		if($o == ""){
			$errors[] = 'Old password is empty!';
			$brojGresaka++;
		}
		if($n == ""){
			$errors[] = 'New password is empty!';
			$brojGresaka++;
		}
		else if(strlen($new) < 5){
			$errors[] = 'Password must have a minimum of five letters!';
			$brojGresaka++;
		}
		if($cn == ""){
			$errors[] = 'Confirm new password is empty!';
			$brojGresaka++;
		}

		$xml = new SimpleXmlElement('korisnici/' . $_SESSION['username'] . '.xml' , 0 , true);
		if($old == $xml -> password){
			if($new == $confirmNew ){
				$xml -> password = $new;
				$xml -> asXML('korisnici/' . $_SESSION['username'] . '.xml');
				header('Location: logout.php');
				die;
			}
		}
		else{
			    if(strlen($o) != 0){
					$errors[] = 'Wrong old password!';
					$brojGresaka++;
				}
			}

		if($brojGresaka == 0){
			$errors[] = 'Passwords does not match!';
		}
 
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>User page</title>
	<link rel="stylesheet" type="text/css" href="stilZaChangePassword.css">
	<SCRIPT src="changePassword.js"></SCRIPT>
</head>

<body>

	<div id="changePassword">
	<h1>Change password</h1>
	
	<?php
			if(count($errors) > 0){
				echo '<ul>';
				foreach($errors as $e){
					echo '<li>' . $e . '</li>';
				}
				echo '</ul>';
			}
		?>

	<form method="post" action="">
		<p>Old password: <input type="password" name="oldPassword" size="20" id="oldPassword" /> </p>
		<p>New password: <input type="password" name="newPassword" size="20" id="newPassword" /> </p>
		<p>Confirm new password: <input type="password" name="confirmNewPassword" size="20" id="cnp" /> </p>
		<p> <input type="submit" value="Change password" name="changePassword" id="cp" /></p>
	</form>

	<hr/>
	<a href="index.php" id="userPage">User home</a>
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