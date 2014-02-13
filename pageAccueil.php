<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="page accueil.css"/>
        <title> sportevents_Accueil</title>
    </head>
    <body>
    <center>
        <img src="images/logo.PNG" alt="logo" width= "400" height= "300"></center> <br/>
      
        <?php
        
        ?>
       <form method="POST" action="Recup.php">
           <fieldset class="identification"> <fieldset class="connection"> <center>se connecter</center> </fieldset>
    <table> <tr><td> Login : </td>
        <td> <input type ="text" size="20" name="login" id="login" </td></tr>
        <tr>  <td> Mot De Passe : </td>
            <td> <input type ="password" size="20" name="mdp" id="mdp" </td></tr>
    </table>
               <?php
		require 'connect.php';
                
		?>
               <center> <input type ="submit" value="valider"></center>
</fieldset>
           <a href="choixevenement.php" class="bouton">
               <section class="evenement" title="consulter les évènements"> <fieldset class="titre">consulter les évènements</fieldset>
               <img src="images/sport.PNG" alt="evenement" width= "400" height= "300">
           </section>
           </a>
    </body>
</html>

