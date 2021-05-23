<?php include('fonction.php')?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>star W ajout personnage</title>
        <link rel="stylesheet" href="style1.css" />
        
    </head>

    <body>
    	<header> 
                <div class="logo">
                    <p> <img src="logo1.jpg" alt="image du logo" /> </p>
                </div>
                
        </header>
        
        <fieldset>
            <legend>Ajout d'un nouveau personnage</legend>
                <span class="box">
                    <form method="post" action="traitement_ajout_personnage.php">
                        <p>Nom : </p>
            
                        <?php if (isset($er_nom)){?>
                            <div><?= $er_nom ?></div>                 
                        <?php } ?>

                        <input type="text" placeholder="nom" name="name" value="<?php if(isset($nom)){ echo $nom; }?>" required> 
                        
                        <p>Sexe (M/F) : </p>
            
                        <?php if (isset($er_sexe)){?>
                            <div><?= $er_sexe ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="sexe" name="gender" value="<?php if(isset($sexe)){ echo $sexe; }?>" required>

                        <p>Taille : </p>
            
                        <?php if (isset($er_taille)){?>
                            <div><?= $er_taille ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="taille" name="height" value="<?php if(isset($taille)){ echo $taille; }?>" required>

                        <p>Poids : </p>
            
                        <?php if (isset($er_poids)){?>
                            <div><?= $er_poids ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="poids" name="mass" value="<?php if(isset($poids)){ echo $poids; }?>" required>

                        <p>Planet d'origine (ID) : </p>
            
                        <?php if (isset($er_planet)){?>
                            <div><?= $er_poids ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="planet" name="homeworld" value="<?php if(isset($idplanet)){ echo $idplanet; }?>" required>

                        
                        
                        <button type="submit" name="ajout_personnage" class="bouton" >Envoyer</button>
                    </form>
                </span>
        </fieldset>
        
        <legend>
        <br><br>
		    <div class="container">
                <h3>Planetes</h3>            
  			    <table class="table table-striped">
    			    <thead>
      				    <tr>
        			    <th>id</th>
        			    <th>Planete</th>
      				</tr>
                    </thead>
    			    <tbody>
      				    <?php
      					    // il faut tester si vide ou non film 4 n'a pas de planete
						    $planetes = GetHomeworld();
						    if (!empty($planetes))
						    {
							    while ($planet = mysqli_fetch_array($planetes))
							    {
        						    echo '<tr>';
        						    echo '<td>'.$planet['id'].'</td>';
        						    echo '<td>' .$planet['name']. '</td>';
        						    echo '</tr>';
							    }
						    }
						    else
							    echo "il n'y a pas d'information";
      				        ?>
    			    </tbody>
  			    </table>
            </div>
        </legend>
        
    </body>
</html>