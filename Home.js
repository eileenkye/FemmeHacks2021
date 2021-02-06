// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Scrit to submit message
function sendEmail() {
	var ourEmail = "22yee@brearley.org";				
	var yourEmail = document.getElementById("email").value;
	var subject = document.getElementById("subject").value;
	var body = document.getElementById("message").value;
	var fullBody = body + '%0D%0A%0D%0A%0D%0A%0D%0ASent from: ' + yourEmail;
	var email = 'mailto:' + ourEmail + '?subject=' + subject + '&body=' + fullBody;
	window.open(email);	
}
