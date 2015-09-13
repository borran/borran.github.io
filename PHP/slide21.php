<?php
	$nombre1 = 2; 
	$nombre2 = 5;

	$cond1 = ($nombre1 == $nombre2); // $cond1 est faut
	$cond2 = ($nombre1 != $nombre2); // $cond2 est vrai
	$cond3 = ($nombre1 < $nombre2);  // $cond3 est vrai
	$cond4 = ($nombre1 > $nombre2);  // $cond4 est faut
	$cond5 = ($nombre1 <= $nombre1); // $cond5 est vrai
	$cond6 = ($nombre2 >= $nombre2); // $cond6 est vrai
?>


<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
    <title>Opérations logiques</title>
  </head>
  <body>    
    <p> $cond1 = <?php echo $cond1; ?> </p>
    <p> $cond2 = <?php echo $cond2; ?> </p>
    <p> $cond3 = <?php echo $cond3; ?> </p>
    <p> $cond4 = <?php echo $cond4; ?> </p>
    <p> $cond5 = <?php echo $cond5; ?> </p>
    <p> $cond6 = <?php echo $cond6; ?> </p>   
  </body>
</html>