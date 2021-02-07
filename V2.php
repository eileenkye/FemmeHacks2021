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
	<title>Volunteer</title>
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
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button text-navy hover-white">Volunteer</a> 
    <a href="Map.html" onclick="w3_close()" class="w3-bar-item w3-button hover-white">Map</a>
    <a href="Home.html#contact" onclick="w3_close()" class="w3-bar-item w3-button hover-white">Contact</a> 
    <a href="Sign-up.php" onclick="w3_close()" class="w3-bar-item w3-button hover-white">Sign Up/Log In</a>
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
    <h1 class="w3-jumbo text-navy"><b>Volunteer Opportunities!</b></h1>
  </div>
  <p id="hi">paragraph</p>

<!-- End page content -->
</div>

<div class="w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right text-navy">Volunteer Today </p></div>

<script type="text/javascript">

			//var publicSpreadsheetUrl = 'https://docs.google.com/spreadsheets/d/1KGu03e1R8NeFKP3ywWHq4LmBouZEnbTlfYHG8zEf5OE/edit?usp=sharing?output=csv';
			var publicSpreadsheetUrl = 'https://docs.google.com/spreadsheets/d/1CJT_qAzbbabPldjsSHybX3UfeoliSrBoFQl-m8YKbcQ/edit?usp=sharing?output=csv';
			function init() {
				Tabletop.init( { key: publicSpreadsheetUrl,
					callback: showInfo,
                    simpleSheet: true } ) //showInfo
				Tabletop.init( { key: publicSpreadsheetUrl,
					callback: successFunction,
                    simpleSheet: true } ) //showInfo
			}

			function showInfo(data, tabletop) {
				//alert('Successfully processed!'
				//alert(data);
				console.log(data);
				var paragraph = "";
				for (i=0; i < data.length; i++) {
					console.log(data[i]); 
					var myObj = data[i];
					var entry = "<h2>" + myObj.title + "</h3> <b>" + myObj.opportunity_id + "</b><br><br>" + myObj.summary + "<br><br>" + myObj.area + " " + myObj.street_address + "<br><br><b>" + myObj.requirements + "</b><br><br>" + "<a href=" + myObj.website + ">" + myObj.website + "</a><br><br>";
					paragraph += entry;
				}
				document.getElementById('hi').innerHTML = paragraph;
				//document.getElementById('hi').innerHTML = data;
			}
			
			function successFunction(data) {
				console.log("heyyyy");
				var stringData = data.toString();
				//document.getElementById('hi').innerHTML = stringData;
				var allRows = stringData.split(/\r?\n|\r/);
				/*var table = '<table>';
				for (var singleRow = 0; singleRow < allRows.length; singleRow++) {
				  if (singleRow === 0) {
					table += '<thead>';
					table += '<tr>';
				  } else {
					table += '<tr>';
				  }
				  var rowCells = allRows[singleRow].split(',');
				  for (var rowCell = 0; rowCell < rowCells.length; rowCell++) {
					if (singleRow === 0) {
					  table += '<th>';
					  table += rowCells[rowCell];
					  table += '</th>';
					} else {
					  table += '<td>';
					  table += rowCells[rowCell];
					  table += '</td>';
					}
				  }
				  if (singleRow === 0) {
					table += '</tr>';
					table += '</thead>';
					table += '<tbody>';
				  } else {
					table += '</tr>';
				  }
				} 
				table += '</tbody>';
				table += '</table>'; */
				//var element = createElementFromHTML(table);
				//var parent = document.getElementById('parent');
				//parent.appendChild(element);
			  }
			  
			  function createElementFromHTML(htmlString) {
				  var template = document.createElement('template');
				  template.innerHTML = htmlString.trim();
				  return template.firstChild;
			  }

	window.addEventListener('DOMContentLoaded', init)
</script>
</body>
</html>