<?php
// CONNECTION A LA BDD
function Connection_bdd()
{
    $con = mysqli_connect('127.0.0.1', 'grp_9_5', 'eiP4hohs3d', 'bdd_9_5'); 
    // ok bdd test serveur ecole 127.0.0.1', 'grp_9_5', 'eiP4hohs3d', 'bdd_9_5' 
    //'127.0.0.1', 'root', '', 'test' serveur perso
    if (!$con) {
        echo "Connect Error: " . mysqli_connect_error();
        exit();
    }
    return $con;
}



function GetMdp($mail) 
{
    $con = Connection_bdd();
    $sql = 'SELECT MDP FROM Utilisateur where  MAIL = \''.$mail.'\''; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    if ($rowCount == 0) {
        return 'probleme';
    }
    $fetch = mysqli_fetch_assoc($query);
    return $fetch['MDP'];
}
function GetRole($login)
{
    $con = Connection_bdd();
    $sql = 'SELECT `type` FROM Utilisateur where MAIL = \''.$login.'\''; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    if ($rowCount == 0) {
        return null;
    }
    $fetch = mysqli_fetch_assoc($query);
    return $fetch['type'];
}
function AddUser($mail,$mdp)
{
    $con = Connection_bdd();
    $sql = "INSERT INTO Utilisateur(MAIL, MDP) 
        VALUES ('$mail', '$mdp')";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);
    $query;
}
function UpdateUser_type($mail,$newType)
{
  $con = Connection_bdd();
  $sql = "UPDATE Utilisateur SET TYPE = '$newType' WHERE user.mail = '".$mail."'";
  $query = mysqli_query($con, $sql);
  mysqli_close($con);
  $query;
}
function IsUser($login)
{
    $con = Connection_bdd();
    $sql = " SELECT mail FROM Utilisateur WHERE mail = '".$login."'";
    $query = mysqli_query($con, $sql);
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    if ($rowCount == 0) {
        return null;
    }
    else{
        return true;
    }
}


//image


function AddImage($id,$url,$commentaire)
{
    $con = Connection_bdd();
    $sql = "INSERT INTO img(IDFILM, URL, COMMENTAIRE) 
        VALUES ('$id', '$url', '$commentaire')";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);
    $query;
}

function GetAllImage() //sert a afficher les images pour l'admin
{
    $con = Connection_bdd();
    $sql = "SELECT * FROM img"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}

function GetImage($id) //sert a afficher les images pour l'admin
{
    $con = Connection_bdd();
    $sql = "SELECT * FROM img WHERE idfilm = '".$id."' "; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}

function SuppImage($id)
{
  $con = Connection_bdd();
  $sql = "DELETE FROM img WHERE id = '".$id."' ";
  $query = mysqli_query($con, $sql);
  mysqli_close($con);
  $query;
}


//Film
function getInfoFilm($id)
{
    $con = Connection_bdd();
    $sql = "SELECT * FROM Film where id = '".$id."'"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    if ($rowCount == 0) {
        return null;
    }
    $fetch = mysqli_fetch_assoc($query);
    return $fetch; //return toute la ligne
}

function GetFilm() //sert a afficher les film pour l'admin
{
    $con = Connection_bdd();
    $sql = "SELECT * FROM Film"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}

function AddFilm($titre,$date,$episode,$opening)
{
    $con = Connection_bdd();
    $sql = "INSERT INTO Film(TITLE, RELEASE_DATE, EPISODE, OPENING) 
        VALUES ('$titre', '$date', '$episode', '$opening')";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);
    $query;
}

function UpdateFilm($id,$categorie,$valeur)
{
  $con = Connection_bdd();
  $sql = "UPDATE Film SET $categorie = '$valeur' WHERE id = '".$id."'";
  $query = mysqli_query($con, $sql);
  mysqli_close($con);
  $query;
}

function SuppFilm($id)
{
  $con = Connection_bdd();
  $sql = "DELETE FROM Film WHERE id = '".$id."' ";
  $query = mysqli_query($con, $sql);
  mysqli_close($con);
  $query;
}

//Personnage
function GetPersonnages($id) //avoir les perso par rapport aux films
{
    $con = Connection_bdd();
    $sql = "SELECT People.name,Planet.name,People.gender FROM PlaysIn JOIN People ON PlaysIn.id_people=People.id JOIN Planet ON Planet.id=homeworld WHERE id_film ='".$id."'"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}

function GetAllPersonnages() //avoir tout les perso
{
    $con = Connection_bdd();
    $sql = "SELECT * FROM People"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}

function GetHomeworld() //sert a afficher les id et les nom des planetes pour l'admin
{
    $con = Connection_bdd();
    $sql = "SELECT id, name FROM planet"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}

function AddPersonnage($nom,$sexe,$taille,$poids,$idplanet)
{
    $con = Connection_bdd();
    $sql = "INSERT INTO People(NAME, GENDER, HEIGHT, MASS, HOMEWORLD) 
        VALUES ('$nom', '$sexe', '$taille', '$poids', '$idplanet')";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);
    $query;
}

function UpdatePersonnage($id,$categorie,$valeur)
{
  $con = Connection_bdd();
  $sql = "UPDATE People SET $categorie = '$valeur' WHERE id = '".$id."' ";
  $query = mysqli_query($con, $sql);
  mysqli_close($con);
  $query;
}

function SuppPersonnage($id)
{
  $con = Connection_bdd();
  $sql = "DELETE FROM People WHERE id = '".$id."' ";
  $query = mysqli_query($con, $sql);
  mysqli_close($con);
  $query;
}

//Planet
function GetPlanet($id)
{
    $con = Connection_bdd();
    $sql = "SELECT * FROM Planet JOIN FilmPlanets ON FilmPlanets.id_planet=Planet.id WHERE FilmPlanets.id_film='".$id."'"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}

function GetAllPlanet() //pour l'admin
{
    $con = Connection_bdd();
    $sql = "SELECT * FROM Planet"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}

function AddPlanet($nom,$diametre,$population)
{
    $con = Connection_bdd();
    $sql = "INSERT INTO Planet(NAME, DIAMETER, POPULATION) 
        VALUES ('$nom', '$diametre', '$population')";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);
    $query;
}

function UpdatePlanet($id,$categorie,$valeur)
{
  $con = Connection_bdd();
  $sql = "UPDATE Planet SET $categorie = '$valeur' WHERE id = '".$id."' ";
  $query = mysqli_query($con, $sql);
  mysqli_close($con);
  $query;
}

function SuppPlanet($id)
{
  $con = Connection_bdd();
  $sql = "DELETE FROM Planet WHERE id = '".$id."' ";
  $query = mysqli_query($con, $sql);
  mysqli_close($con);
  $query;
}

//Vaisseau
function GetVaisseau($id)
{
    $con = Connection_bdd();
    $sql = "SELECT class,mglt FROM Starship JOIN StarshipsInFilms ON Starship.id=StarshipsInFilms.id_starship WHERE StarshipsInFilms.id_film='".$id."'"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}

function GetAllVaisseau() //pour admin
{
    $con = Connection_bdd();
    $sql = "SELECT * FROM Starship"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}

function AddVaisseau($class,$mglt)
{
    $con = Connection_bdd();
    $sql = "INSERT INTO Starship(CLASS, MGLT) 
        VALUES ('$class', '$mglt')";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);
    $query;
}

function UpdateVaisseau($id,$categorie,$valeur)
{
  $con = Connection_bdd();
  $sql = "UPDATE Starship SET $categorie = '$valeur' WHERE id = '".$id."' ";
  $query = mysqli_query($con, $sql);
  mysqli_close($con);
  $query;
}

function SuppVaisseau($id)
{
  $con = Connection_bdd();
  $sql = "DELETE FROM Starship WHERE id = '".$id."' ";
  $query = mysqli_query($con, $sql);
  mysqli_close($con);
  $query;
}

function getSynopsis($episode)
{
    $con = Connection_bdd();
    $sql = "SELECT opening FROM `Film` WHERE episode = '$episode'"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    if ($rowCount == 0) {
        return null;
    }
    $fetch = mysqli_fetch_assoc($query);
    return $fetch['opening'];
}
function getAnneeSortie($episode)
{
    $con = Connection_bdd();
    $sql = "SELECT release_date FROM `Film` WHERE episode = '$episode'"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    if ($rowCount == 0) {
        return null;
    }
    $fetch = mysqli_fetch_assoc($query);
    return $fetch['release_date'];  
}
function getTitre($episode)
{
    $con = Connection_bdd();
    $sql = "SELECT title FROM `Film` WHERE episode = '".$episode."'"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    if ($rowCount == 0) {
        return null;
    }
    $fetch = mysqli_fetch_assoc($query);
    return $fetch['title'];    
}
function getNombreFilm()
{
    $con = Connection_bdd();
    $sql = "SELECT id FROM Film";
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    if ($rowCount == 0) {
        return null;
    }
    $fetch = mysqli_fetch_assoc($query);
    return $rowCount;  // return le nb de ligne
}
//vote
function addVote($user,$episode)
{
    $con = Connection_bdd();
    $sql = "INSERT INTO Vote(mail_user, episode) VALUES ('$user', '$episode')";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);
    $query;
}
function isVote($user)
{
    $con = Connection_bdd();
    $sql = " SELECT * FROM Vote WHERE mail_user = '".$user."'";
    $query = mysqli_query($con, $sql);
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    if ($rowCount == 0) {
        return null;
    }
    else{
        return true;
    } 
}
function getVote($user)
{
    $con = Connection_bdd();
    $sql = "SELECT episode FROM `Vote` WHERE mail_user = '".$user."'"; 
    $query  = mysqli_query($con, $sql); 
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    if ($rowCount == 0) {
        return null;
    }
    $fetch = mysqli_fetch_assoc($query);
    return $fetch['episode']; 
}
function updateVote($user,$newVote)
{
    $con = Connection_bdd();
    $sql = "UPDATE Vote SET episode ='".$newVote."' WHERE mail_user = '".$user."'";
    $query = mysqli_query($con, $sql);
    mysqli_close($con);
}
//sondage
function getResultVote()
{
    $con = Connection_bdd();
    $sql = "SELECT episode,COUNT(*) AS nbvote FROM Vote GROUP BY episode 
                ORDER BY nbvote DESC";
    $query = mysqli_query($con, $sql);
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con);
    
    if ($rowCount == 0) {
        return null;
    }
    return $query;
}
function nbVote()
{
    $con = Connection_bdd();
    $sql = "SELECT COUNT(*) AS n FROM Vote";
    $query = mysqli_query($con, $sql);
    $rowCount = mysqli_num_rows($query);
    mysqli_close($con); 
    if ($rowCount == 0) {
        return null;
    }
    $fetch = mysqli_fetch_assoc($query);
    return $fetch['n'];
}

?>