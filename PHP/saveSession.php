<?php
   session_start();
   $_SESSION['nom']    = "Borran";
   $_SESSION['prenom'] = "Fatemeh";
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
    <title>Créer une session</title>
  </head>
  <body>
    <b> Session créée ! </b>
    <a href="restoreSession.php"> Autre page </a>
  </body>
</html>
