<?php session_start(); ?> 
<html>
	<head>
		<title>Jeu du nombre al&eacute;atoire</title>
	</head>
	<body>
		
		<?php 

      $min = 1;
      $max = 100;

			if(!isset($_SESSION['valeur'])) {
				srand();
				$rand = rand($min,$max);
 				$_SESSION['valeur'] = $rand ;
				$_SESSION['nbrCoups'] = 5 ;
				print "Le but du jeu est de retrouver un nombre compris entre {$min} et {$max} <br>";
				print "en 5 essais maximum. Lors de chaque tentative, vous recevrez une<br>";
				print "indication pour vous dire s'il faut chercher un nombre plus grand<br>";
				print "ou plus petit que celui qui vient d'être inscrit. Le jeu se termine<br>";
				print "lorsque la bonne réponse est trouvée ou lorsque le nombre d'essais<br>";
				print "maximum est atteint.<br><br><br>";			
			}

			$perdu = (true);
			
			if(!empty($_POST))
			{

				$choix = $_POST['choix'];
				
				if(($choix >= $min) AND ($choix <= $max))
				{
					$alea = $_SESSION['valeur']; 
					$coup = $_SESSION['nbrCoups'];
					
					$coup = $coup - 1;
					$_SESSION['nbrCoups'] = $coup;
					
					
					if($choix == $alea)
					{
							$perdu = (false);
							print "Bravo c'est gagné! Le nombre à trouver était bien {$alea}";
							print "<br><br>";
							print "Cliquer <a href='game.php'>ici</a> pour rejouer";
							session_destroy();	
					}
					else if(($coup == 0) AND $perdu)
					{
              print "Desolé c'est perdu! <br>"; 
						  print "Le nombre à trouver était {$alea}";
						  print "<br><br>";
						  print "Cliquer <a href='game.php'>ici</a> pour rejouer";
						  session_destroy();
					}
					else if(($choix > $alea) AND ($coup > 0) )
					{
							print "Le nombre à trouver est inférieur à {$choix}<br>";
							print "Nombre de coups restants = {$coup}<br><br>";
					} 
					else
					{
							print "Le nombre à trouver est supérieur à {$choix}<br>";
							print "Nombre de coups restants = {$coup}<br><br>";
					}

					
				} 
				else if ($choix == 'bière')
				{
							$perdu = (false);
							print "Bravo c'est gagné! Le nombre à trouver était bien {$_SESSION['valeur']}";
							print "<br><br>";
							print "Cliquer <a href='game.php'>ici</a> pour rejouer";
							session_destroy();
        }
        else
				{
					print "Veuillez saisir un nombre compris entre {$min} et {$max}!<br><br>";
				}
			}
			
			if(($_SESSION['nbrCoups'] > 0) AND ($perdu))
			{
		?>

		<form method="post" action="game.php">
			<label> Choix du nombre : <input type="text" name="choix"/></label>
			<br><br>
			<input type="submit" value="Envoyer"/> 
		</form>

		<?php
			}
 		 ?>
		
	</body>
</html>