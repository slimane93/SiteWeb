<?php include('fonction.php')?>

<?php
    $nom=($_POST['name']);
    $diametre=$_POST['diameter'];
    $population=$_POST['population'];

    AddPlanet($nom,$diametre,$population);
    header('location: starW_creationAdmin.php');
?>

