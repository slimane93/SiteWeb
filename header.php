<div class="p-4 mb-2 bg-transparent text-white" >
        		<div class="row">
                    <div class="col">
                    	<div class="d-flex justify-content-center" >
                            <img class="logo-header" src="logo1.jpg" alt="image du logo" />  
                        </div>
						<?php if($_COOKIE['login'] == 'no')  : ?>
							<div class="row align-items-end">
                    			<div class="col text-right">
                        			<a class="btn btn-outline-warning" href="starW_co.php"><i class="fas fa-user"></i>  Se connecter</a>&nbsp;
									<a class="btn btn-outline-light" href="starW_in.php">S'inscrire </a> <!-- test-->
                    			</div>
							</div>
						<?php elseif ($_COOKIE['login'] == 'ok') :?>
							<div class="row align-items-end">
                    			<div class="col text-right">
									<?php if($_COOKIE['type'] == '2') 
									// 2-> admin
									{echo '<a class="btn btn-outline-light" href="starW_creationAdmin.php"><i class="fas fa-pen-nib"></i>  Création (Admin)</a>&nbsp;';}
									?>
                                    <a class="btn btn-outline-warning" href="traitement_deco.php"><i class="fas fa-user-slash"></i>  Se déconnecter</a>
                                    <a class="btn btn-outline-light" href="page_info_film.php">  Film</a>
									<a class="btn btn-outline-light" href="page_info_species.php"> Especes</a>
									<!-- <i class="fas fa-jedi"></i> icon film ??-->
                    			</div>
							</div>
						<?php endif; ?>
                        
								
							<div class="row">
                    			<input type="search" id="maRecherche" name="q" >
								<button class="btn btn-outline-success">Rechercher</button>
							</div>
							
                    </div>
                </div>
 </div>