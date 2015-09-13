<?php
   $titre = "Page Personnelle de Bernie";
   $nom       = "Noël";
   $prenom    = "Bernie";
   $photo     = "Bernie_Portrait.jpg";
   $naissance = 1982;
   $prenoms = array ('François', 'Michel', 'Nicole');
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
    <title><?php echo($titre); ?></title>
  </head>
  <body>
    <h1> Bonjour <?php echo($nom); ?> ! </h1>
    <p> Ton prénom est <?php echo($prenom); ?>. </p>
    <p> Ta date de naissance est <?php echo($naissance); ?>. </p>
    <p> Tu as <?php echo(2014 - $naissance); ?> ans! </p>
    <p> $prenoms[0] = <?php echo $prenoms[0] ?> </p>
    <p> $prenoms[1] = <?php echo $prenoms[1] ?> </p>
    <p> $prenoms[2] = <?php echo $prenoms[2] ?> </p>    
  </body>
</html>