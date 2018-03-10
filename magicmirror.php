<!Doctype html>
<html>
	<head>
		<title>Magic Mirror 1.0</title>
		<link rel="stylesheet" href="style2.css" type="text/css">
		<meta charset= "utf-8">
		<script type="text/javascript">
			function re_load(){
				window.document.location.reload();
			}
			setTimeout("re_load()",3600000);
		</script>
		
		<script type="text/javascript">
			
			function show_clock(id_name){
				var weekdays = new Array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
				var aktuell = new Date();
				var day = aktuell.getDate();
				var month = aktuell.getMonth() + 1;
				var year = aktuell.getFullYear();
				var weekday = aktuell.getDay();
				var hours = aktuell.getHours();
				var minutes = aktuell.getMinutes();
				var seconds = aktuell.getSeconds();

				var day0 = ((day < 10) ? "0" : "");
				var month0 = ((month < 10) ? "0" : "");
				
				var hours0 = ((hours < 10) ? "0" : "");
				var minutes0 = ((minutes < 10) ? "0" : "");
				var seconds0 = ((seconds < 10) ? "0" : "");

				var output = weekdays[weekday] + ", " + day0 + day +"."+ month0 + month+"." + year + ", " + hours0 + hours +":" + minutes0 + minutes +":" + seconds0 + seconds + " Uhr";
				document.getElementById(id_name).innerHTML = output;
				window.setTimeout("show_clock('" + id_name + "')", 1000);
			}


		</script>
		

	</head>


	<body onload="show_clock('running_clock')"> 
		<div id="wrapper"> 
			<header>
				<img src="bilder/mmlogo.png" style="width:300px; hight:200px" alt="Logo">
				<div id="running_clock"></div>
			</header>
			<section>
				<div id="refresh">
					<?php include ("./php/wetter.php"); ?>
				</div>
			</section>
			<aside>
				
			</aside>
			<footer>
				<marquee>
					<?php include ("./php/rss.php"); ?>
				</marquee>
			</footer>
		
		</div>
	</body>






</html>
