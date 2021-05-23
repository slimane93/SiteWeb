<?php include('fonction.php')?>

<?php
    $id=($_POST['id']);

    SuppFilm($id);
    header('location: starW_creationAdmin.php');
?>

