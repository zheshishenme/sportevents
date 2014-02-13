<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="choixevenement.css"/>
        <title> Les évènements</title>
    </head>
    <body>
        <header>
            
            <img src="images/logoweb.PNG" alt="logo" width= "200" height= "100">
            <img src="images/pour votre hygièene de vie.PNG" alt="logo" width= "200" height= "50">
            <img src="images/sportevents.PNG" alt="logo" width= "300" height= "100">
            <img src="images/suzy.jpg" alt="logo" class="identifiant" width= "50" height= "50">
            <div id="identifiant">
                <?php
		require 'connect.php';
		
                ?>
            </div>$requete= "select prenom from IDENTIFIANT";
                $resultat=mysql_query($requete);
                echo ("bienvenue $resultat");
                ?>
           
        </header>
        <nav>
            
               et bien voilà 
           
        </nav>
        
        
        <section>
          
            <div id="evenement">
                
            </div>
            
        </section>
        
        <footer>
           
               sportevents, tous droits réservés
            
        </footer>
        
    </body>
</html>
