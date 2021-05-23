<?php include('fonction.php')?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>star W modif personnage</title>
        <link rel="stylesheet" href="style1.css" />
    </head>

    <body>
    	<header> 
                <div class="logo">
                    <p> <img src="logo1.jpg" alt="image du logo" /> </p>
                </div>
                
        </header>
        <p> reférez vous au tableau ci dessous pour savoir quelle catégorie modifier à quel id</p>
        <fieldset>
            <legend>Modif d'un personnage</legend>
                <span class="box">
                    <form method="post" action="traitement_modif_personnage.php">
                        <p>Catégorie : </p>
            
                        <?php if (isset($er_categorie)){?>
                            <div><?= $er_categorie ?></div>                 
                        <?php } ?>

                        <input type="text" placeholder="categorie" name="categorie" value="<?php if(isset($categorie)){ echo $categorie; }?>" required> 
                        
                        <p>Nouvelle valeur : </p>
            
                        <?php if (isset($er_valeur)){?>
                            <div><?= $er_valeur ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="valeur" name="valeur" value="<?php if(isset($valeur)){ echo $valeur; }?>" required>

                        <p>Id : </p>
            
                        <?php if (isset($er_id)){?>
                            <div><?= $er_id ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="id" name="id" value="<?php if(isset($id)){ echo $id; }?>" required>

                        
                        
                        <button type="submit" name="modif_personnage" class="bouton" >Envoyer</button>
                    </form>
                </span>
        </fieldset>
        
        <legend>
            <br><br>
            <div class="container">
  			    <h3>Personnages</h3>            
  			    <table class="table table-striped">
    			    <thead>
      				    <tr>
                        <th>Id</th>
        			    <th>Name</th>
        			    <th>Gender</th>
                        <th>Height</th>
                        <th>Mass</th>
        			    <th>Homeworld</th>
      				    </tr>
   				    </thead>
    			    <tbody>
      				    <?php
						    $users = GetAllPersonnages();
						    if (!empty($users))
						    {
							    while ($user = mysqli_fetch_array($users))
								    {
        						    echo '<tr>';
        						    echo '<td>'.$user['id'].'</td>';
        						    echo '<td>' .$user['name']. '</td>';
                                    echo '<td>'.$user['gender']. '</td>';
                                    echo '<td>'.$user['height'].'</td>';
        						    echo '<td>' .$user['mass']. '</td>';
       							    echo '<td>'.$user['homeworld']. '</td>';
        						    echo '</tr>';
								    }
						    }
						    else 
						    echo "pas d'information";
      				    ?>
    			    </tbody>
  			    </table>
		    </div>
        </legend>
        
    </body>
</html>