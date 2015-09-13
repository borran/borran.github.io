<?php
   $titre = "Page Personnelle de Bernie";
   $nom   = "Bernie";
   $photo = "Bernie_Portrait.jpg ";
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo($titre); ?></title>
  </head>
  <body>
    <h1> Bonjour <?php echo($nom); ?> ! </h1>
    <p> Voici une photo : </p>
    <img src="<?php echo($photo); ?>" border="0"/>
  </body>
</html>