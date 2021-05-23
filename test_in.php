<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>star W inscription</title>
        <link rel="stylesheet" href="style1.css" />
    </head>

    <body>
    	<header> 
                <span class="logo">
                    <p> <img src="logo1.jpg" alt="image du logo" /> </p>
                </span>
                
        </header>
		<?php echo 'toto';
		?>
        <fieldset >
            <legend>Inscription</legend>
                <span class="box">
                    <form method="post" action="traitement_in.php">
                        <p>Identifiant : </p>
            
                        <?php
                        // S'il y a une erreur sur le nom alors on affiche
                        if (isset($er_mail)){
                            ?>
                            <div><?= $er_mail ?></div>                 
                        <?php
                        } 
                        ?>

                        <input type="email" placeholder="Votre mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required> 
                        
                        <p>Mot de passe : </p>
            
                        <?php
                        if (isset($er_mdp)){
                        ?>
                            <div><?= $er_mdp ?></div>
                        <?php
                        }
                        ?>
                        
                        <input type="password" placeholder="Votre mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                        
                        <button type="submit" name="inscription">Envoyer</button>
                    </form>
                </span>
        </fieldset>

    </body>
</html>