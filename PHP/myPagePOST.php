<?php
   $nom    = $_POST['name'];
   $prenom = $_POST['surname'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ma page</title>
  </head>
  <body>
    <h1>Bonjour <?php echo($prenom); ?> !</h1>
    <p>Ton nom de famille est <strong><?php echo($nom); ?></strong>
  </body>
</html>