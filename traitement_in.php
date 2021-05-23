<?php include('fonction.php')?>

<?php
    $mail=($_POST['mail']);
    //$mail=htmlentities(trim($_POST['mail']));
    $mdp=$_POST['mdp'];
    $confmdp=$_POST['confmdp'];
    $mdp_hache=md5($mdp);
    // trim sup espace
    // htmlentities onvertit tous les caractères éligibles en entités HTML 
    
    // verification mail pas encore inscrit
    if (IsUser($mail)==true)
    {?>
        <script type="text/javascript">
        alert('Le mail est déja utilisé');
        document.location.href = 'starW_in.php';
        </script>
        
        
    <?php 
    }
    elseif ($mdp != $confmdp)
    {?>
        <script type="text/javascript">
        alert("Le mot de passe n'est pas identique");
        document.location.href = 'starW_in.php';
        </script>
    <?php
    }
    else{
        AddUser($mail,$mdp_hache);
        setcookie('login', 'ok');
        setcookie('user', $mail);
        setcookie('type',getRole($mail));
        header('location: page_info_film.php');
    }?>

