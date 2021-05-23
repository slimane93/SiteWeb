<!-- personnages -->
<br><br>
		<div class="container">
  			<h3>Personnages</h3>            
  			<table class="table table-striped">
    			<thead>
      				<tr>
        			<th>Name</th>
        			<th>Gender</th>
        			<th>Homeworld</th>
      				</tr>
   				</thead>
    			<tbody>
      				<?php
						$users = GetPersonnages($id_film);
						if (!empty($users))
						{
							while ($user = mysqli_fetch_array($users))
								{
        						echo '<tr>';
        						echo '<td>'.$user[0].'</td>';
        						echo '<td>' .$user[2]. '</td>';
       							echo '<td>'.$user[1]. '</td>';
        						echo '</tr>';
								}
						}
						else 
						  echo "pas d'information";
      				?>
    			</tbody>
  			</table>
		</div>

      	<!-- planetes -->
      	<br><br>
		<div class="container">
  			<h3>Planetes</h3>            
  			<table class="table table-striped">
    			<thead>
      				<tr>
        			<th>Name</th>
        			<th>Diameter</th>
        			<th>Population</th>
      				</tr>
    			</thead>
    			<tbody>
      				<?php
      					// il faut tester si vide ou non film 4 n'a pas de planete
						$planetes = GetPlanet($id_film);
						if (!empty($planetes))
						{
							while ($planet = mysqli_fetch_array($planetes))
							{
        						echo '<tr>';
        						echo '<td>'.$planet['name'].'</td>';
        						echo '<td>' .$planet['diameter']. '</td>';
        						echo '<td>'.$planet['population']. '</td>';
        						echo '</tr>';
							  }
						}
						else
							echo "il n'y a pas d'information";
      				?>
    			</tbody>
  			</table>
		</div>

 		<!-- vaisseaux -->
 		<br><br>
		<div class="container">
  			<h3>Vaisseaux</h3>            
  			<table class="table table-striped">
    			<thead>
      				<tr>
        			<th>Class</th>
        			<th>mglt</th>
      				</tr>
    			</thead>
    			<tbody>
      				<?php
      					// il faut tester si vide ou non 
						$vaisseaux = GetVaisseau($id_film);
						if (!empty($vaisseaux))
						{
							while ($vaisseau = mysqli_fetch_array($vaisseaux))
							{
        					echo '<tr>';
        					echo '<td>'.$vaisseau[0].'</td>';
        					echo '<td>' .$vaisseau[1]. '</td>';
        					echo '</tr>';
							}
						}
						else
							echo "il n'y a pas d'information";
      				?>
    			</tbody>
  			</table>
		</div>
