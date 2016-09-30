<?php

$conn = mysqli_connect('localhost', 'root', '', 'phplessons');

if (!$conn){
	die("Connect failed: " . mysqli_connect_error());
}
