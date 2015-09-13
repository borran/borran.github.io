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
            //Si aucune variable de session nommmŽe "count" existe
            if (!isset($_SESSION['count'])) {
                //crŽation de la variable de session (initialisŽe ˆ 0)
                $_SESSION['count'] = 0;
            }
            //sinon
            else {
                //incrŽmentation de la variable de session "count"
                //avec la valeur de la variable "inc" envoyŽe en POST
                //via un formulaire
                $_SESSION['count'] = $_SESSION['count'] + $_POST['inc'];
            }
            //Affichage du compteur (variable de session "count")
            echo "Compteur = {$_SESSION['count']}";
        ?>
        <br/>
        <table>
            <tr>
                <td>
                    <form method="POST" action="demo.php">
                        <!-- Champ cachŽ d'un formulaire
                             nommŽ "inc" -->
                        <input type="hidden" name="inc" value="1"/>
                        <input type="submit" value="+ 1"/> 
                    </form>
                </td>
                <td>
                    <form method="POST" action="demo.php">
                        <input type="hidden" name="inc" value="2"/>
                        <input type="submit" value="+ 2"/> 
                    </form>
                </td>
                <td>
                    <form method="POST" action="demo.php">
                        <input type="hidden" name="inc" value="3"/>
                        <input type="submit" value="+ 3"/> 
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>