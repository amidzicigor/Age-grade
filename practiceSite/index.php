<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
</head>
<body>

<!--Login form-->
<form action="login.php" method="POST">
	<input type="text" name="username" placeholder="Username"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<button type="submit">Login</button>
</form>

<?php
	
	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	} else {
		echo "You are not logged in";
	}

?>

<br><br><br>


<!--Sign Up form-->
<form action="signup.php" method="POST">
	
	<input type="text" name="firstname" placeholder="Firstname"><br>
	<input type="text" name="lastname" placeholder="Lastname"><br>
	<input type="text" name="username" placeholder="Username"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<button type="submit">Sign Up</button>

</form>

<br><br><br>

<form action="logout.php">
	
	<button type="submit">Log out</button>

</form>

</body>
</html>
