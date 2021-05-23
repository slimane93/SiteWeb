<?php include('fonction.php')?>

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
                        <div class="progress-bar bg-info" style="width:<?php echo $pourcentage?>%">
                        </div>
                </div>
		<?php } ?>
</div>