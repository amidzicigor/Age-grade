<!DOCTYPE html>
<html>
<head>
</head>
<body style="text-align: center">
	<?php

		$userChoice = $_POST['userinput'];
		$userChoice = strtolower($userChoice);

		if ($userChoice == "rock" || $userChoice == "paper" || $userChoice == "scissors"){
			echo "User: " . $userChoice . "<br />";

			$computerChoice = rand(1, 3);

			if($computerChoice == 1){
				$computerChoice = "rock";
			} elseif ($computerChoice == 2){
				$computerChoice = "paper";
			} else {
				$computerChoice = "scissors";
			}
			echo "Computer: " . $computerChoice . "<br />";

			if($userChoice == $computerChoice){
				echo "Its a tie!";
				echo "<br /> <input type=\"button\" value=\"Try Again\" onclick=\"location.href='http://localhost/enterInfo.html';\">";
			} elseif($userChoice == "rock" && $computerChoice == "paper"){
				echo "Computer wins!";
				echo "<br /> <input type=\"button\" value=\"Try Again\" onclick=\"location.href='http://localhost/enterInfo.html';\">";
			} elseif($userChoice == "rock" && $computerChoice == "scissors"){
				echo "User wins!";
				echo "<br /> <input type=\"button\" value=\"Try Again\" onclick=\"location.href='http://localhost/enterInfo.html';\">";
			} elseif($userChoice == "paper" && $computerChoice == "rock"){
				echo "User wins!";
				echo "<br /> <input type=\"button\" value=\"Try Again\" onclick=\"location.href='http://localhost/enterInfo.html';\">";
			} elseif($userChoice == "paper" && $computerChoice == "scissors"){
				echo "Computer wins!";
				echo "<br /> <input type=\"button\" value=\"Try Again\" onclick=\"location.href='http://localhost/enterInfo.html';\">";
			} elseif($userChoice == "scissors" && $computerChoice == "paper"){
				echo "User wins!";
				echo "<br /> <input type=\"button\" value=\"Try Again\" onclick=\"location.href='http://localhost/enterInfo.html';\">";
			} else {
				echo "Computer wins!";
				echo "<br /> <input type=\"button\" value=\"Try Again\" onclick=\"location.href='http://localhost/enterInfo.html';\">";
			}
		} else {
			echo "Please choose a proper weapon next time" . "<br /> <input type=\"button\" value=\"Try Again\" onclick=\"location.href='http://localhost/enterInfo.html';\">";
		}
	?>

</body>
</html>