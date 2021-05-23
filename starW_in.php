<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>star W inscription</title>
        <link rel="stylesheet" href="style1.css" />
    </head>

    <body>
    	<header> 
                <div class="logo">
                    <p> <img src="logo1.jpg" alt="image du logo" /> </p>
                </div>
                
        </header>

        <fieldset >
            <legend>Inscription</legend>
                <span class="box">
                    <form method="post" action="traitement_in.php">
                        <p>Identifiant : </p>
            
                        <?php if (isset($er_mail)){?>
                            <div><?= $er_mail ?></div>                 
                        <?php } ?>

                        <input type="email" placeholder="Votre mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required> 
                        
                        <p>Mot de passe : </p>
            
                        <?php if (isset($er_mdp)){?>
                            <div><?= $er_mdp ?></div>
                        <?php } ?>
                        
                        <input type="password" placeholder="Votre mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                        <input type="password" placeholder="Confirmez votre mot de passe" name="confmdp" value="<?php if(isset($confmdp)){ echo $confmdp; }?>" required>
                        
                        <button type="submit" name="inscription" class="bouton" >Envoyer</button>
                    </form>
                </span>
        </fieldset>

    </body>
</html>