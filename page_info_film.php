<?php 
$titre_page;
$episode;
include 'fonction.php'
 ?>
<?php if($_COOKIE['login']=='ok')
	{?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> star W information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="style1.css"> <!--css pour le fond noir -->
    
</head>
<body>
    <main role="main">
        <?php include("header.php");?>
        <!-- header de la page contient logo identification admin et recherche ou logo admin et deco si co-->
        

        <div class="p-3 mb-2 bg-transparent text-black">
            <div class='container'>  
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong class="message">Bienvenue <?php echo $_COOKIE['user'] ?> !</strong>  Vous êtes maintenant connecté.
                </div>
            </div>
        <div class="row row-cols-1 row-cols-md-3">
        
                <!--film 1-->
            <div class="col mb-4">
                <div class="card h-100">
                    <?php 
                    $titre_page='A New Hope';
                    $episode=4;
                     ?>
                    <img src="e4.jpg" class="card-img-top" alt="affiche A New Hope">
                    <div class="card-body">
                        <a class="text-body" href="Episode4.php"><h4><?php echo($titre_page) ?></h4></a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> <?php echo getAnneeSortie($episode) ?> </small>
                    </div>
                </div>
            </div>
                <!-- film2-->
            <div class="col mb-4">
                <div class="card h-100">
                <?php 
                    $titre_page='The Empire Strikes Back';
                    $episode=5;
                     ?>
                    <img src="e5.jpg" class="card-img-top" alt="affiche The Empire Strikes Back">
                    <div class="card-body">
                        <a class="text-body" href="Episode5.php"><h4><?php echo($titre_page) ?></h4></a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo getAnneeSortie($episode) ?></small>
                    </div>
                </div>
            </div>
                <!--film3-->
            <div class="col mb-4">
                <div class="card h-100">
                <?php 
                    $titre_page='Return of the Jedi';
                    $episode=6;
                     ?>
                    <img src="e6.jpg" class="card-img-top" alt="affiche Return of the Jedi">
                    <div class="card-body">
                        <a class="text-body" href="Episode6.php"><h4><?php echo($titre_page) ?></h4></a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo getAnneeSortie($episode) ?></small>
                    </div>
                </div>
            </div>
                <!--film4-->
            <div class="col mb-4">
                <div class="card h-100">
                <?php 
                    $titre_page='The Phantom Menace';
                    $episode=1;
                     ?>
                    <img src="e1.jpg" class="card-img-top" alt="affiche The Phantom Menace">
                    <div class="card-body">
                        <a class="text-body" href="Episode1.php"><h4><?php echo($titre_page) ?></h4></a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo getAnneeSortie($episode) ?></small>
                    </div>
                </div>
            </div>
                <!--film 5-->
            <div class="col mb-4">
                <div class="card h-100">
                <?php 
                    $titre_page='Attack of the Clones';
                    $episode=2;
                     ?>
                    <img src="e2.jpg" class="card-img-top" alt="affiche Attack of the Clones">
                    <div class="card-body">
                        <a class="text-body" href="Episode2.php"><h4><?php echo($titre_page) ?></h4></a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo getAnneeSortie($episode) ?></small>
                    </div>
                </div>
            </div>
                <!--film 6-->
            <div class="col mb-4">
                <div class="card h-100">
                <?php 
                    $titre_page='Revenge of the Sith';
                    $episode=3;
                     ?>
                    <img src="e3.jpg" class="card-img-top" alt="affiche Revenge of the Sith">
                    <div class="card-body">
                        <a class="text-body" href="Episode3.php"><h4><?php echo($titre_page) ?></h4></a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo getAnneeSortie($episode) ?></small>
                    </div>
                </div>
            </div>
                
            
        </div>
        </div>
        <?php include('footer.php')?>
    </main>
    <script src="bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php }else{
	header('Location: starW_co.php');
}?>