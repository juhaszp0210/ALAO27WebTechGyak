<!DOCTYPE html>
<html lang="hu">
 <head>
  <meta charset="UTF-8">
  <title>Űrlap vezérlése új elemekkel</title>
 </head>
 <body>
 <font style="font-size:18pt">
 	<h2>Űrlap vezérlése új elemekkel</h2>

	<?php
		print ("Név: " . $post['nev'] . "<br>");	

		print ("PIN kód: " . $post['kod'] . "<br>");	
	?>
  <a href="urlap3.html">vissza az űrlapra...</a>

 </body>
</html>
