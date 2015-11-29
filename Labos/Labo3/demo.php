<!-- 
Nom   		: demo.php
Auteur		: Christophe Greppin
Date  		: 08.12.2011
Modification: 24.11.2015 version sans session
Visualisation sur http://www.greppin.com/cai/demo.php
-->
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
        <title>Compteur</title> 
    </head>
    <body>
        <?php 
            //si aucune variable de type POST nommmée "count" existe
            if (!isset($_POST['count']))
            {
                //création d'une variable temporaire nommée count (initialisée à 0)
                $count = 0;
            }
            //sinon
            else
            {
                //création d'une variable temporaire nommée count initialisée
                //avec la valeur de la variable "inc" envoyée en POST
				//ainsi que l'ancienne valeur du compteur "count" envoyée en POST également
                //via un formulaire
                $count = $_POST['count'] + $_POST['inc'];
            }
            //Affichage du compteur (variable temporaire "count")
            echo "Compteur = {$count}";
        ?>
        <br/>
        <table>
            <tr>
                <td>
                    <form method="POST" action="demo.php">
                        <!-- Champ caché d'un formulaire nommé "inc" -->
                        <input type="hidden" name="inc" value="1"/>
						<!-- Champ caché d'un formulaire nommé "count" et 
						initilisé avec la valeur du compteur actuel-->
						<input type="hidden" name="count" value="<?php echo $count; ?>"/>
                        <input type="submit" value="+ 1"/> 
                    </form>
                </td>
                <td>
                    <form method="POST" action="demo.php">
                        <input type="hidden" name="inc" value="2"/>
						<input type="hidden" name="count" value="<?php echo $count; ?>"/>
                        <input type="submit" value="+ 2"/> 
                    </form>
                </td>
                <td>
                    <form method="POST" action="demo.php">
                        <input type="hidden" name="inc" value="3"/>
						<input type="hidden" name="count" value="<?php echo $count; ?>"/>
                        <input type="submit" value="+ 3"/> 
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>
