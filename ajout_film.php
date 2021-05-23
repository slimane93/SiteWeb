<?php include('fonction.php')?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>star W ajout film</title>
        <link rel="stylesheet" href="style1.css" />
        
    </head>

    <body>
    	<header> 
                <div class="logo">
                    <p> <img src="logo1.jpg" alt="image du logo" /> </p>
                </div>
                
        </header>
        
        <fieldset>
            <legend>Ajout d'un film</legend>
                <span class="box">
                    <form method="post" action="traitement_ajout_film.php">
                        <p>Titre : </p>
            
                        <?php if (isset($er_titre)){?>
                            <div><?= $er_titre ?></div>                 
                        <?php } ?>

                        <input type="text" placeholder="titre" name="title" value="<?php if(isset($titre)){ echo $titre; }?>" required> 
                        
                        <p>Date de sortie (AAAA-MM-JJ) : </p>
            
                        <?php if (isset($er_date)){?>
                            <div><?= $er_date ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="date" name="release_date" value="<?php if(isset($date)){ echo $date; }?>" required>

                        <p>N° épisode : </p>
            
                        <?php if (isset($er_episode)){?>
                            <div><?= $er_episode ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="episode" name="episode" value="<?php if(isset($episode)){ echo $episode; }?>" required>

                        <p>Opening : </p>
            
                        <?php if (isset($er_opening)){?>
                            <div><?= $er_opening ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="opening" name="opening" value="<?php if(isset($opening)){ echo $opening; }?>" required>
                        
                        
                        <button type="submit" name="ajout_film" class="bouton" >Envoyer</button>
                    </form>
                </span>
        </fieldset>
        
        
    </body>
</html>