<?php include('fonction.php')?>

        <?php
        $mdpHashe = GetMdp($_POST['email']);// mdp bdd
        //$hash_mdp = $_POST['mdp'];
        $hash_mdp =md5 ($_POST['mdp']);// mdp saisi

        if(!isset($_POST['email']) && !isset($_POST['mdp'])) 
            { //si champs vide retour page de connexion normalement impossible required
            header('Location: starW_co.php');
            }
        else
            { //Sinon on vérifie mdp
                if ($hash_mdp == $mdpHashe ) {
                    setcookie('login', 'ok');
                    setcookie('essai', '0');
                    setcookie('user', $_POST['email']);
                    setcookie('type',getRole($_POST['email']));
                    header('Location: index.php');
                } else {
                    if ($_COOKIE['essai']==1)
                        header('Location: starW_in.php');
                    else{
                        setcookie('essai', '1');
                        header('Location: starW_co.php');

                    }
                }
            }
            
        
        ?>
    
