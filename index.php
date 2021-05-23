<!DOCTYPE html>
<html lang="en">
<head>
    <title> star W accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="style1.css"> <!--css pour le fond noir et sondage -->
</head>
<body>
	<main role="main">
	<?php
	include ('fonction.php') ;
	setcookie('login', 'no', time()+3600*24, '/', '', false, true);
	setcookie('user', '', time()+3600*24, '/', '', false, true);
	setcookie('type','',time()+3600*24, '/', '', false, true);
	?>
        <?php include("header.php");?>
		<!-- header de la page contient logo identification admin et recherche ou logo admin et deco si co-->
		
           <div class="p-3 mb-2 bg-dark text-white">  
           		<div class="contener">
           			<hr>
            			<div class="row">
                			<div class="col-md-9">
                    			<p class="text-sm-left">Ce site présente tout l'univers Star Wars !<br>
								Vous pourrez y trouver une multitude d'informations sur les films comme les personnages, les planètes visitée ou encore les vaisseaux</p>
							</div>
            			</div>
            		<hr>
            		<div class="row">
            			<div class="col-md-4">
							<br><br>
							<br><h3> Dernier film sortie : </h3>
							<img class="mr-3" src="affiche.jpeg" max-width />
                        </div>
                        <div class="col-md-5">
                            <br><br>
                            <h2>Le Réveil de la Force</h2>
                            <h3>
                                Sysnopsis
                            </h3>
                            <p>L'univers de Star Wars se déroule dans une galaxie qui est le théâtre d'affrontements entre les Chevaliers Jedi et les Seigneurs noirs des Sith, personnes sensibles à la Force, un champ énergétique mystérieux leur procurant des pouvoirs psychiques. Les Jedi maîtrisent le Côté lumineux de la Force, pouvoir bénéfique et défensif, pour maintenir la paix dans la galaxie. Les Sith utilisent le Côté obscur, pouvoir nuisible et destructeur, pour leurs usages personnels et pour dominer la galaxie.
                                <br>
                            Environ un an après la mort de Luke Skywalker, la Résistance tente de survivre face au Premier Ordre, désormais mené par un nouveau Suprême Leader, Kylo Ren. Une rumeur agite cependant toute la galaxie : l'Empereur Palpatine serait de retour. Tandis que Rey s'entraîne sous la houlette de la Générale Leia Organa, Kylo Ren cherche à défier Palpatine, qu'il considère comme une menace à son pouvoir.</p>
                            <br><br> 
						</div>
						<br><br>

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
           </div>	
       
	</main>
	
	<?php include('footer.php')?>

    <script src="bootstrap.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>