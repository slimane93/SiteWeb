<?php include('fonction.php')?>

<?php
    $nom=($_POST['name']);
    $sexe=$_POST['gender'];
    $taille=$_POST['height'];
    $poids=$_POST['mass'];
    $idplanet=$_POST['homeworld'];

    AddPersonnage($nom,$sexe,$taille,$poids,$idplanet);
    header('location: starW_creationAdmin.php');
?>

