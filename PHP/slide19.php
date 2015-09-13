<?php
	$nombre = 5 + 2; // $nombre prend la valeur 7
	$nombre = 5 - 2; // $nombre prend la valeur 3
	$nombre = 5 * 2; // $nombre prend la valeur 10
	$nombre = 5 / 2; // $nombre prend la valeur 2
	$nombre = 5 % 2; // $nombre prend la valeur 1

	// Allez on rajoute un peu de difficulté
	$nombre1 = 5 + 2 * 3;     // $nombre prend la valeur 11
	$nombre2 = (5 + 2) * 3;   // $nombre prend la valeur 21
	$nombre3 = $nombre2 - 9.6; // $nombre prend la valeur 11.4
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
    <title>Opérations arithmétiques</title>
  </head>
  <body>    
    <p> $nombre1 = <?php echo $nombre1; ?> </p>
    <p> $nombre2 = <?php echo $nombre2; ?> </p>
    <p> $nombre3 = <?php echo $nombre3; ?> </p>             
  </body>
</html>