<php?
?> 

<html>
	<head>
		<!--Load the Ajax API-->
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="Scripts/jquer_latest_2.11_.min.js" type="text/javascript"></script>
		<script src="https://files.codepedia.info/uploads/iScripts/html2canvas.js" type="text/javascript"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/tabletop.js/1.5.1/tabletop.min.js'></script>
	<title>Sign-up</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Home.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>

</head>
<body class="background-gray">

<!-- Sidebar/menu -->
<nav class="w3-sidebar background-blue text-navy w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft hover-white" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Community<br>Service</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="Home.html" onclick="w3_close()" class="w3-bar-item w3-button hover-white">Home</a> 
    <a href="Home.html#about" onclick="w3_close()" class="w3-bar-item w3-button hover-white">About</a>
    <a href="V2.php" onclick="window.location.href = 'V2.php';" class="w3-bar-item w3-button text-navy hover-white">Volunteer</a> 
    <a href="Map.html" onclick="w3_close()" class="w3-bar-item w3-button hover-white">Map</a>
    <a href="Home.html#contact" onclick="w3_close()" class="w3-bar-item w3-button hover-white">Contact</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button hover-white">Sign Up/Log In</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large background-blue text-navy w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button background-blue text-navy w3-margin-right hover-white" onclick="w3_open()">☰</a>
  <span>Community Service</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo text-navy"><b>Sign-up or Login!</b></h1>
  </div>
  <form id="login-form">
      <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Email">
      <input type="password" name="password1" id="password-field" class="login-form-field" placeholder="Password">
	  <!--<input type="password" name="password2" id="password-field" class="login-form-field" placeholder="Re-type password">
      --><input type="submit" value="Login" id="login-form-submit">
    </form>

<!-- End page content -->
</div>

<div class="w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right text-navy">Volunteer Today </p></div>

<script type="text/javascript">
	const loginForm = document.getElementById("login-form");
	const loginButton = document.getElementById("login-form-submit");
	const loginErrorMsg = document.getElementById("login-error-msg");
	
	var publicSpreadsheetUrl = 'https://docs.google.com/spreadsheets/d/1mvTVYSjnopFAslF-qEi06V6IGI_eE3Z-tLwgFjHk7Qw/edit?usp=sharing?output=csv';
	var username;
	var password;
	//const password2 = loginForm.password2.value;

	loginButton.addEventListener("click", (e) => {
		e.preventDefault();
		
		username = loginForm.username.value;
		password1 = loginForm.password1.value;
		
		if (username === "" || password1 === "") { <!--  || password2 === "" -->
			alert("You must fill out all entries.");
			//location.reload();
		} //else if (password1 != password2) {
			//alert("The passwords do not match.");
		//} 
		else {
			//loginErrorMsg.style.opacity = 1;
			console.log("you have signed up!");
			
			Tabletop.init( { key: publicSpreadsheetUrl,
			callback: showInfo,
            simpleSheet: true } )
			
		}
	})
	
	function showInfo(data, tabletop) {
		for (i = 0; i < data.length; i++) {
			var myObj = data[i];
			var userEmail = myObj.email;
			var userPassword = myObj.password;
			if (userEmail ===username) {
				if (userPassword === password1) {
					alert("You logged in!");
					var pass = userEmail;
					localStorage.setItem("email", pass);
					window.open("Profile.html");
				}
				else {
					alert("Incorrect password!");
				}
			}
		}
	}

</script>
</body>
</html>