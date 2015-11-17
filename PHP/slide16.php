<?php
   $titre = "Array";
   $prenoms = array ('François', 'Michel', 'Nicole');
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
    <title><?php echo($titre); ?></title>
  </head>
  <body>
    <p> $prenoms[0] = <?php echo $prenoms[0] ?> </p>
    <p> $prenoms[1] = <?php echo $prenoms[1] ?> </p>
    <p> $prenoms[2] = <?php echo $prenoms[2] ?> </p>    
  </body>
</html>