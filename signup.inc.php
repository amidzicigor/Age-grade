<?php
	session_start();

	include 'dbh.php';

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "INSERT INTO users (firstname, lastname, username, password) 
	VALUES ('$firstname', '$lastname', '$username', '$password')";
	$result = mysqli_query($conn, $sql);

	header('Location: index.php');