<?php
   $prenom = "Ernest";
   $nom    = "Noël";
   $marie  = TRUE;
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>Page Bonjour</title>
  	<meta charset="UTF-8">  	
  </head>
  <body>
    <?php 
    	if (!marie OR ($prenom != "Bernie" AND $nom == "Noël")) {
    		echo "Soit tu n'es pas marié, 
    		soit tu es de la famille de Bernie (mais pas Bernie), 
    		ou alors tu es les deux à la fois !";
    	}
    ?>
  </body>
</html>
