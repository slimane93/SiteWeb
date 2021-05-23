<?php if($_COOKIE['type'] == '2')
	{?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> star W administateur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="style1.css"> <!--css pour le fond noir et sondage -->
</head>

<body>
	<main role="main">
        <?php include("header_admin.php");?>
    </main>

    <p> Tout marche juste y a un bug sur le header dans les différentes pages</p>
    <p> Il reste juste a faire la fonction ajouter une image</p>

    <div>
        <div class="col text-center">
            <br><p>Personnage : </p></br>
            <a class="btn btn-outline-warning" href="ajout_personnage.php">  Créer</a>&nbsp;
            <a class="btn btn-outline-warning" href="modif_personnage.php">  Modifier</a>&nbsp;
            <a class="btn btn-outline-warning" href="supp_personnage.php">  Supprimer</a>&nbsp;    
        </div>
        
        <div class="col text-center">
            <br><p>Film : </p></br>
            <a class="btn btn-outline-warning" href="ajout_film.php">  Créer</a>&nbsp;
            <a class="btn btn-outline-warning" href="modif_film.php">  Modifier</a>&nbsp;
            <a class="btn btn-outline-warning" href="supp_film.php">  Supprimer</a>&nbsp;
            
        </div>

        <div class="col text-center">
            <br><p>Planete : </p></br>
            <a class="btn btn-outline-warning" href="ajout_planet.php">  Créer</a>&nbsp;
            <a class="btn btn-outline-warning" href="modif_planet.php">  Modifier</a>&nbsp;
            <a class="btn btn-outline-warning" href="supp_planet.php">  Supprimer</a>&nbsp;
            
        </div>

        <div class="col text-center">
        <br><br><p>Vaisseau : </p></br>
            <a class="btn btn-outline-warning" href="ajout_vaisseau.php">  Créer</a>&nbsp;
            <a class="btn btn-outline-warning" href="modif_vaisseau.php">  Modifier</a>&nbsp;
            <a class="btn btn-outline-warning" href="supp_vaisseau.php">  Supprimer</a>&nbsp;
            
        </div>

        <div class="col text-center">
        <br><br><p>Image : </p></br>
            <a class="btn btn-outline-warning" href="ajout_image.php">  Créer</a>&nbsp;
            <a class="btn btn-outline-warning" href="supp_image.php">  Supprimer</a>&nbsp;
            
        </div>
    </div>
    
    	
	<?php include('footer.php')?>

    <script src="bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>
<?php }else{
	header('Location: starW_co.php');
}?>