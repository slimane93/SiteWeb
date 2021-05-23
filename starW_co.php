<?php setcookie('essai','0',time()+3600*24, '/', '', false, true) ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>star W co</title>
        <link rel="stylesheet" href="style1.css">
        
    </head>

    <body>
        
    	<header > 
            <div class="logo" >
            <p> <img class="image_logo" src="logo1.jpg" alt="image du logo" /> </p> 
            </div>
                
        </header>      
        

            <fieldset >
            <legend>Connexion</legend>
                <span class="box">
                <?php if($_COOKIE['essai']==1) {?>
                    <p class="warning"> <strong> Identifiant et/ou mot de passe incorect </strong> Si vous n'êtes pas encore inscrit cliqez sur le lien suivant <a href="starW_in.php">Inscription</a> </p>
                <?php }?>
                <form method="post" action="traitement_co.php">
                    <p>Email : </p>
                    <input type="email"  maxlength="255" name="email" required> 
                    <p>Mot de passe : </p>
                    <input type="password" pattern="^[A-Za-z0-9 ]*$" maxlength="50" name="mdp" required>
                    <p><input type="submit" name="ok" value="Valider" class="bouton"> </p><!-- attention type submit pour transfert info-->
                </form>
                </span>
        </fieldset>

    </body>
</html>