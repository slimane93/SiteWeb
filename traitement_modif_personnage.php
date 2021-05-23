<?php include('fonction.php')?>

<?php
    $id=($_POST['id']);
    $categorie=$_POST['categorie'];
    $valeur=$_POST['valeur'];

    UpdatePersonnage($id,$categorie,$valeur);
    header('location: starW_creationAdmin.php');
?>

