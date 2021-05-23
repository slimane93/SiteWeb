<?php include('fonction.php')?>

<?php
    $id=($_POST['id']);

    SuppPersonnage($id);
    header('location: starW_creationAdmin.php');
?>

