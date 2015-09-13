<?php session_start(); ?>  
<!--  CrŽation d'une session -->
<!--
Nom   : demo.php
Auteur: Christophe Greppin
Date  : 08.12.2011
Visualisation sur http://www.greppin.com/CAI/demo.php  
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Compteur</title> 
    </head>
    <body>
        <?php 
        	//Initialisation du compteur
        	$count = 0;
            //Affichage du compteur
            $count = $_POST['count'] + $_POST['inc'];            
            echo "Compteur = " . $count;
        ?>
        <br/>
        <table>
            <tr>
                <td>
                    <form method="POST" action="demoPOST.php">
                        <!-- Champ cachŽ d'un formulaire
                             nommŽ "inc" -->
                        <input type="hidden" name="inc" value="1"/>
                        <input type="hidden" name="count" value="<?php echo $count ?>"/>
                        <input type="submit" value="+ 1"/> 
                    </form>
                </td>
                <td>
                    <form method="POST" action="demoPOST.php">
                        <input type="hidden" name="inc" value="2"/>
                        <input type="hidden" name="count" value="<?php echo $count ?>"/>                        
                        <input type="submit" value="+ 2"/> 
                    </form>
                </td>
                <td>
                    <form method="POST" action="demoPOST.php">
                        <input type="hidden" name="inc" value="3"/>
                        <input type="hidden" name="count" value="<?php echo $count ?>"/>                        
                        <input type="submit" value="+ 3"/> 
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>