<?php include('fonction.php')?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>star W ajout planete</title>
        <link rel="stylesheet" href="style1.css" />
        
    </head>

    <body>
    	<header> 
                <div class="logo">
                    <p> <img src="logo1.jpg" alt="image du logo" /> </p>
                </div>
                
        </header>
        
        <fieldset>
            <legend>Ajout d'une planete</legend>
                <span class="box">
                    <form method="post" action="traitement_ajout_planet.php">
                        <p>Nom : </p>
            
                        <?php if (isset($er_nom)){?>
                            <div><?= $er_nom ?></div>                 
                        <?php } ?>

                        <input type="text" placeholder="nom" name="name" value="<?php if(isset($nom)){ echo $nom; }?>" required> 
                        
                        <p>Diametre : </p>
            
                        <?php if (isset($er_diametre)){?>
                            <div><?= $er_diametre ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="diametre" name="diameter" value="<?php if(isset($diametre)){ echo $diametre; }?>" required>

                        <p>Taille de la population : </p>
            
                        <?php if (isset($er_population)){?>
                            <div><?= $er_population ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="population" name="population" value="<?php if(isset($population)){ echo $population; }?>" required>

                        
                        
                        <button type="submit" name="ajout_planet" class="bouton" >Envoyer</button>
                    </form>
                </span>
        </fieldset>
        
        
    </body>
</html>