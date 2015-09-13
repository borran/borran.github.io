<?php
   session_start();
   $nom    = $_SESSION['nom'];
   $prenom = $_SESSION['prenom'];
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Restaurer une session</title>
  </head>
  <body>
    <b> Contenu de la session : </b> <br/><br/>
    Nom : <b><?php echo($nom); ?></b><br/>
    Prenom : <b><?php echo($prenom); ?></b>
  </body>
</html>
