function setGoal() {
	var goal = prompt("How many hours do you hope to complete?");
	var message = "Goal: " + goal + " hours";
	document.getElementById("goal").innerHTML = message;

}

function addHours() {
	var newHours = prompt("Congratulations! How many hours did you complete?");
	var hours = document.getElementById("completed").innerHTML;
	hours = hours.slice(17, hours.length-6);
	var hoursnum = parseFloat(hours);
	hoursnum += parseFloat(newHours);
	var message = "Hours Completed: " + hoursnum + " hours";
	document.getElementById("completed").innerHTML = message;
}

function resetHours() {
	document.getElementById("completed").innerHTML = "Hours Completed: 0 hours";
}

function signIn() {
	var userName = prompt("Email:");
	var password = prompt("Password:");
	var message = "Email: " + userName;
	document.getElementById("email").innerHTML = message;
}