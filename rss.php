<?php

include('/var/www/html/library/simplepie-1.5/autoloader.php');
include('/var/www/html/library/simplepie-1.5/idn/idna_convert.class.php');


$url = ('http://tagesschau.de/xml/rss2');


$rss_feed = new SimplePie();
$rss_feed->set_feed_url($url);
$rss_feed->init();






?>


<html>
<head></head>
<body>
	
	<p style="white-space: pre;"> 
		<?php 
			foreach($rss_feed->get_items(0,10) as $nachrichten){
				echo $nachrichten->get_title().
				"(".$nachrichten->get_date().")" 
				. "\t\t\t\t\t\t\t\t\t\t###\t\t\t\t\t\t\t\t\t\t";
			}
		?>
	</p>
</body>
