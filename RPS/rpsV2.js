function submitForm() {
    var firstName = document.form1.userNameBox.value;
    var userNameInfo = '<div>Welcome ' + firstName + '!</div>';
    document.getElementById("form1").id = "form2"
    document.getElementById("form2").innerHTML = "<h3>" + userNameInfo + "</h3>";
    
}

//function when 'yes' is clicked
function yesButton(){
	//changes 'yesAndNo' div id to 'awesome' id 
	document.getElementById('yesAndNo').id = 'instructions';
	//
	document.getElementById("instructions").innerHTML = "<h3>Choose Rock, Paper, or Scissors.</h3>";

}
