<?php include('fonction.php')?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>star W ajout vaisseau</title>
        <link rel="stylesheet" href="style1.css" />
        
    </head>

    <body>
    	<header> 
                <div class="logo">
                    <p> <img src="logo1.jpg" alt="image du logo" /> </p>
                </div>
                
        </header>
        
        <fieldset>
            <legend>Ajout d'un vaisseau</legend>
                <span class="box">
                    <form method="post" action="traitement_ajout_vaisseau.php">
                        <p>Type du vaisseau : </p>
            
                        <?php if (isset($er_class)){?>
                            <div><?= $er_class ?></div>                 
                        <?php } ?>

                        <input type="text" placeholder="class" name="class" value="<?php if(isset($class)){ echo $class; }?>" required> 
                        
                        <p>Mglt : </p>
            
                        <?php if (isset($er_mglt)){?>
                            <div><?= $er_mglt ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="mglt" name="mglt" value="<?php if(isset($mglt)){ echo $mglt; }?>" required>

                        
                        <button type="submit" name="ajout_vaisseau" class="bouton" >Envoyer</button>
                    </form>
                </span>
        </fieldset>
        
        
    </body>
</html>