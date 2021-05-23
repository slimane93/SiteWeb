<?php 
$titre_page='The Phantom Menace';
$episode=1;
$id_film=4;
include 'fonction.php' 
 ?>
<?php if($_COOKIE['login']=='ok')
	{?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?php echo($titre_page);?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="style1.css"> 
</head>
<body>
	<main role="main">
		<?php include ("header.php"); ?>
		<!-- header de la page contient logo identification admin et recherche ou logo admin et deco si co-->
		
		<div class="p-3 mb-2 bg-dark text-white">  <!-- dark ou transparent ??-->
			<h2 class="text-center"><?php echo $titre_page ?></h2>
					<br>
			<div class="row">
				<div class="col-md-9">
					<?php include('vote.php')?>
					<hr><h5>Synopsis</h5>
					<?php  echo getSynopsis($episode);?>
					<hr>
					<br>
        			<?php include 'tableaux.php'?>
					<div class="container">
						<h3> Images </h3>

						<?php include 'traitement_afficher_image.php'?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="section-sondage">
            					<p class="text-secondary"> Resultat Sondage : Quel est votre film préféré ?</p>
								<?php
        							$n = nbVote();
        							$result = getResultVote();
        							while ($result_film = mysqli_fetch_array($result))
									{ ?>
                    					<p> <?php echo getTitre($result_film[0]) ?></p>
 										<?php $pourcentage = ($result_film[1]*100)/$n;?>
                    					<div class="progress">
                    						<div class="progress-bar bg-info" style="width:<?php echo $pourcentage?>%"></div>
                    					</div>
									<?php } ?>
            			</div>
				</div>
			</div>
		</div>
	<?php include('footer.php')?>

									
	</main>
	
	<script src="bootstrap.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

<?php }else{
	header('Location: starW_co.php');
}?>