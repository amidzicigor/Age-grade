<?php
	session_start();

	include 'dbh.php';

	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	if(!$row = mysqli_fetch_assoc($result)){
		echo "Username or password is incorrect";
	} else{
		$_SESSION['id'] = $row['id'];
	}

	header('Location: index.php');