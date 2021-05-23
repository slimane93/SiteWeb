<?php include('fonction.php')?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>star W ajout image</title>
        <link rel="stylesheet" href="style1.css" />
        
    </head>

    <body>
    	<header> 
                <div class="logo">
                    <p> <img src="logo1.jpg" alt="image du logo" /> </p>
                </div>
                
        </header>
        <p> choisissez l'id du film où ajouter l'image en regardant le tableau si dessous </p>
        <fieldset>
            <legend>Ajout d'une image</legend>
                <span class="box">
                    <form method="post" action="traitement_ajout_image.php">
                        <p>Url de l'image : </p>
            
                        <?php if (isset($er_url)){?>
                            <div><?= $er_url ?></div>                 
                        <?php } ?>

                        <input type="text" placeholder="url" name="url" value="<?php if(isset($url)){ echo $url; }?>" required> 
                        
                        <p>Id du film : </p>
            
                        <?php if (isset($er_id)){?>
                            <div><?= $er_id ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="id" name="id" value="<?php if(isset($id)){ echo $id; }?>" required>

                        <p>Commentaire : </p>
            
                        <?php if (isset($er_commentaire)){?>
                            <div><?= $er_commentaire ?></div>
                        <?php } ?>
                        
                        <input type="text" placeholder="commentaire" name="commentaire" value="<?php if(isset($commentaire)){ echo $commentaire; }?>">
                        
                        <button type="submit" name="ajout_film" class="bouton" >Envoyer</button>
                    </form>
                </span>
        </fieldset>
        
        <legend>
            <br><br>
            <div class="container">
  			    <h3>Films</h3>            
  			    <table class="table table-striped">
    			    <thead>
      				    <tr>
                        <th>Id</th>
        			    <th>Title</th>
                        <th>Episode</th>
      				    </tr>
   				    </thead>
    			    <tbody>
      				    <?php
						    $users = GetFilm();
						    if (!empty($users))
						    {
							    while ($user = mysqli_fetch_array($users))
								    {
        						    echo '<tr>';
        						    echo '<td>'.$user['id'].'</td>';
        						    echo '<td>' .$user['title']. '</td>';
                                    echo '<td>'.$user['episode'].'</td>';
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