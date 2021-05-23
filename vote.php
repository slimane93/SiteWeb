<form method="post" action="traitement_vote.php">
<br>
		<h5> Voter pour votre film préféré !! </h5>
			<?php
			$n = getNombreFilm();
			$vote_user= getVote($_COOKIE['user']);
			for ($epi=1;$epi<$n+1;$epi++)
			{
				$titre = getTitre($epi);
				$idbouton = 'customfilm'.$epi.'';
				echo '<div class="custom-control custom-radio custom-control-inline">';
				if($vote_user==$epi) 
					{echo '<input type="radio" id="'.$idbouton.'" name="vote" value="'.$epi.'" class="custom-control-input" checked="checked">';}
				else
					{echo '<input type="radio" id="'.$idbouton.'" name="vote" value="'.$epi.'" class="custom-control-input">';}
  				echo '<label class="custom-control-label" for="'.$idbouton.'">'.$titre.'</label>';
				echo '</div>';
				
			}
			?><button class="btn btn-light" type="submit">Voter</button>
		</form>