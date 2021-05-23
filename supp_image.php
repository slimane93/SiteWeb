<?php include('fonction.php')?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>star W supp image</title>
        <link rel="stylesheet" href="style1.css" />
    </head>

    <body>
    	<header> 
                <div class="logo">
                    <p> <img src="logo1.jpg" alt="image du logo" /> </p>
                </div>
                
        </header>
        <p> reférez vous au tableau ci dessous pour savoir quelle ligne supprimer</p>
        <fieldset>
            <legend>suppréssion d'un film</legend>
                <span class="box">
                    <form method="post" action="traitement_supp_image.php">

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
  			    <h3>Image</h3>            
  			    <table class="table table-striped">
    			    <thead>
      				    <tr>
                        <th>Id</th>
        			    <th>id du film</th>
                        <th>url</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>commentaire</th>
      				    </tr>
   				    </thead>
    			    <tbody>
      				    <?php
						    $users = GetAllImage();
						    if (!empty($users))
						    {
							    while ($user = mysqli_fetch_array($users))
								    {
        						    echo '<tr>';
        						    echo '<td>'.$user['id'].'</td>';
        						    echo '<td>' .$user['idfilm']. '</td>';
                                    echo '<td>'.$user['url'].'</td>';
                                    echo '<td>'.'</td>';
                                    echo '<td>'.'</td>';
                                    echo '<td>'.'</td>';
                                    echo '<td>'.'</td>';
                                    echo '<td>'.$user['commentaire'].'</td>';
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