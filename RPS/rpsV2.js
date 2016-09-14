//function when 'yes' is clicked
function yesButton(){
	//changes 'yesAndNo' div id to 'awesome' id 
	document.getElementById('yesAndNo').id = 'instructions';
	//
	document.getElementById("instructions").innerHTML = "<h3>Choose Rock, Paper, or Scissors.</h3>";

}

function userNameFunction {
	var userName1 = document.userName.userNameBox.value;
	document.getElementById("writeUserName").innerHTML += userName1;
}
