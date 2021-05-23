<?php include('fonction.php')?>

<?php
    $id=($_POST['id']);

    SuppImage($id);
    header('location: starW_creationAdmin.php');
?>

