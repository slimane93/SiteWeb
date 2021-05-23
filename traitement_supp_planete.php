<?php include('fonction.php')?>

<?php
    $id=($_POST['id']);

    SuppPlanet($id);
    header('location: starW_creationAdmin.php');
?>

