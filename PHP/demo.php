<?php session_start(); ?>  
<!--  Cr�ation d'une session -->
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
            //Si aucune variable de session nommm�e "count" existe
            if (!isset($_SESSION['count'])) {
                //cr�ation de la variable de session (initialis�e � 0)
                $_SESSION['count'] = 0;
            }
            //sinon
            else {
                //incr�mentation de la variable de session "count"
                //avec la valeur de la variable "inc" envoy�e en POST
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
                        <!-- Champ cach� d'un formulaire
                             nomm� "inc" -->
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