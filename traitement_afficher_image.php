<?php
    
	$resultats = GetImage($id_film);
	if (!empty($resultats))
	{
	    while ($resultat = mysqli_fetch_array($resultats))
		{
            ?> <br></br> <?php
			?><img src="<?php echo $resultat['url']; ?>"> <?php
            echo $resultat['commentaire'];
            ?> <br></br> <?php
           

		}
	}
	else 
		echo "pas d'information";
?>