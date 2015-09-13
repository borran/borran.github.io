<?php
	$bonjour = "Hello";
	$monde = " world!";
	$salutation = $bonjour . $monde; 
	// $salutation prend la valeur "Hello world!"
	$age = 17;
	$texte = "Le visiteur a " . $age . " ans";
	// $texte = "Le visiteur a 17 ans";
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
    <title>Concatenation</title>
  </head>
  <body>    
    <p> $salutation = <?php echo $salutation; ?> </p>
    <p> $texte = <?php echo $texte; ?> </p>  
  </body>
</html>