<?php 

	
	$city = "Bremerhaven";
	$appid = "165aa98eedf3126365adb8b4862ab394";
	$url = "http://api.openweathermap.org/data/2.5/weather?q=" .$city. "&appid=" .$appid;

	$jsonfile = file_get_contents($url);
	

	$jsondata = json_decode($jsonfile);

	
	//Wetterdaten
	$temp = $jsondata->main->temp;
	$mitemp = $jsondata->main->temp_min;
	$matemp = $jsondata->main->temp_max;
	$ktoc = 273.15;


	$temperatur = $temp - $ktoc;
	$mintemp = $mitemp - $ktoc;
	$maxtemp = $matemp - $ktoc;

	
	$id = $jsondata->weather[0]->icon;
	$icon_url = "http://openweathermap.org/img/w/" .($id). ".png";

	$desc = "<b><p>".$data['weather'][0]['description']."</p></b>";

	$luftdruck = $jsondata->main->pressure; 
	$wind = $jsondata->wind->speed;
	$luftfeuchtigkeit = $jsondata->main->humidity; 
	


	 
 	echo '<img src="'.$icon_url.'" width="250" height="250" /><br>';
	echo "<pre>Aktuelle Temperatur: \t" .$temperatur. "°C<br>" ;
	echo "Luftdruck: \t\t" .$luftdruck. " hpa<br>";
	echo "Mindesttemperatur: \t".$mintemp. "°C<br>";
	echo "Tageshöchsttemperatur: \t".$maxtemp. "°C<br>";
	echo "Luftfeuchtigkeit: \t" .$luftfeuchtigkeit. " %<br>";
	echo "Windgeschwindigkeit: \t" .$wind. " Km/h<br>";
	
	
	
	

?>
<!-- </span> --!> 
