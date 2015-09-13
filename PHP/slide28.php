<?php
   $prenom = "Bernie";
   $nom = "Noël";
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
  	<title>Page Bonjour</title>
  </head>
  <body>
    <?php 
      if ($prenom == "Bernie") {
         echo "<b>Bonjour Bernie !</b>";
      } else {
         echo "<b>Bonjour inconnu !</b>";
      }
    ?>
  </body>
</html>
