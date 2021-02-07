function setGoal() {
	var goal = prompt("How many hours do you hope to complete?");
	var message = "Goal: " + goal + " hours";
	document.getElementById("goal").innerHTML = message;
	localStorage.setItem("goal", goal);

}

function addHours() {
	var newHours = prompt("Congratulations! How many hours did you complete?");
	var hours = document.getElementById("completed").innerHTML;
	hours = hours.slice(17, hours.length-6);
	var hoursnum = parseFloat(hours);
	hoursnum += parseFloat(newHours);
	var message = "Hours Completed: " + hoursnum + " hours";
	document.getElementById("completed").innerHTML = message;
	localStorage.setItem("hours", hoursnum);
}

function resetHours() {
	document.getElementById("completed").innerHTML = "Hours Completed: 0 hours";
	localStorage.setItem("hours", 0);
}

function signIn() {
	var userName = prompt("Email:");
	var password = prompt("Password:");
	var message = "Email: " + userName;
	document.getElementById("email").innerHTML = message;
}

function setSchool() {
	var schoolID = prompt("Please enter your school's ID");
	var message = "School: ";
	document.getElementById("school").innerHTML = message;
}
var username;
function loadUser() {
	var publicSpreadsheetUrl = 'https://docs.google.com/spreadsheets/d/1mvTVYSjnopFAslF-qEi06V6IGI_eE3Z-tLwgFjHk7Qw/edit?usp=sharing?output=csv';
	username = localStorage.getItem("email");
	Tabletop.init( { key: publicSpreadsheetUrl,
		callback: showInfo,
        simpleSheet: true } )
}
	
	
	function showInfo(data, tabletop) {
		for (i = 0; i < data.length; i++) {
			var myObj = data[i];
			var userEmail = myObj.email;
			if (userEmail === username) {
				document.getElementById("email").innerHTML = userEmail;
				var message = "School: " + myObj.school;
				document.getElementById("school").innerHTML = message;
				var name = "Name: " + myObj.name;
				document.getElementById("name").innerHTML = name;
				var goals = "Goals: " + myObj.goals;
				document.getElementById("goal").innerHTML = message;
				var completed = "Hours Completed: " + myObj.completed;
				document.getElementById("completed").innerHTML = message;
				
			}
		}
	}