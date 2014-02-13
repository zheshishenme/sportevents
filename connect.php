<meta charset="UTF-8">
<?php
$SERVEUR="localhost"; // définit le nom du serveur : nom netbios ou adresse IP en fait
$LOGIN="root"; // définit une variable (constante) login
$MDP=""; // définit le mot de passe associé au login ; ici il est vide
$MABASE="cinema"; // définit le nom de la base que l'on va utiliser.Attention, c’est le nom de votre base
$CONNEXION=mysql_connect($SERVEUR,$LOGIN,$MDP); // connexion au serveur de BD MySql
mysql_select_db($MABASE); // Choix de la base
?>

