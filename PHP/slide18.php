<?php
   $titre = "Array";
   $coordonnees = array ('prenom' => 'François', 'nom' => 'Dupont', 'adresse' => '3 Rue du Paradis', 'ville' => 'Marseille');
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
    <title><?php echo($titre); ?></title>
  </head>
  <body> 
    <p> $coordonnees['prenom'] = <?php echo $coordonnees['prenom']; ?> </p>
    <p> $coordonnees['nom'] = <?php echo $coordonnees['nom']; ?> </p>
    <p> $coordonnees['adresse'] = <?php echo $coordonnees['adresse']; ?> </p> 
    <p> $coordonnees['ville'] = <?php echo $coordonnees['ville']; ?> </p>              
  </body>
</html>