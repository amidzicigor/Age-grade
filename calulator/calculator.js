function buttonClick(choice) {
	document.getElementById("result").value += choice;
}

function clear1() {
	document.getElementById("result").value = "";
}

function equals() {

	var result1 = document.getElementById("result").value

	//What do I put here to make the result show up in the textbox with id="result"?
	document.getElementById("result").value = eval(result1); 

}
