function onButtonClick(choice) {

	//gets user's choice from button click
	var userChoice = choice;

	//code to make computer choose R/P/S
	var randNum = Math.floor(Math.random() * 101)

	if(randNum < 33) {
			var computerChoice = "rock";
		} else if (randNum > 33 && randNum < 67) {
			var computerChoice = "paper";
		} else {
			var computerChoice = "scissors";
		}
	//end of code to make computer choose R/P/S

	//code to choose a result
	if(userChoice === "rock" || userChoice === "paper" || userChoice === "scissors"){

			if(userChoice === computerChoice){
				var result1 = "Tie"
			} else if(userChoice === "rock" && computerChoice === "paper"){
				var result1 = "Computer";
			} else if(userChoice === "rock" && computerChoice === "scissors"){
				var result1 = "User";
			} else if(userChoice === "paper" && computerChoice === "scissors"){
				var result1 = "Computer";
			} else if(userChoice === "paper" && computerChoice === "rock"){
				var result1 = "User";
			} else if(userChoice === "scissors" && computerChoice === "rock"){
				var result1 = "Computer";
			} else if(userChoice === "scissors" && computerChoice === "paper"){
				var result1 = "User";
			}
		}
	//end of code to choose a result

	//document user choice to screen
	document.getElementById("result").innerHTML = "<b>User:</b> " + userChoice + "<br />";

	//document computer choice to screen
	document.getElementById("result").innerHTML += "<b>Computer:</b> " + computerChoice + "<br />" + "<br />";

	//document the result to screen
	if (result1 === "Computer") {
		document.getElementById("result").innerHTML += "The computer wins!";
	} else if (result1 === "User") {
		document.getElementById("result").innerHTML += "The user wins!";
	} else if (result1 === "Tie") {
		document.getElementById("result").innerHTML += "Its a tie!";
	}

	//implimenting a scoreboard
	
}