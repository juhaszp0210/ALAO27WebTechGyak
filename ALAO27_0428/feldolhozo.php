<!DOCTYPE html>
<html lang="hu">
 <head>
  <meta charset="UTF-8">
  <title>feldolgozo php</title>
 </head>
 <body>
 <font style="font-size:18pt">
 	<h2>HTML 5 �rlap</h2>

<?php



echo ("<strong>N�v:</strong>" . $_POST['nev'] . "<br><br>");



echo ("<strong>PIN k�d:</strong>" . $_POST['kod'] . "<br><br>");



echo ("<strong>Gy�m�lcs:</strong>" . $_POST['gyumolcs'] . "<br><br>");



echo ("<strong>�letkor</strong>" . $_POST['eletkor'] . "<br><br>");



echo ("<strong>L�bm�ret:</strong>" . $_POST['labmeret'] . "<br><br>");

echo ("<strong>�nbizalom:</strong>" . $_POST['onbizalom'] . "<br><br>");




?>
	
  <a href="urlap3.html">vissza az �rlapra...</a>

 </body>
</html>
