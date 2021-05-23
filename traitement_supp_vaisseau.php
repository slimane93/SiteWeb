<?php include('fonction.php')?>

<?php
    $id=($_POST['id']);

    SuppVaisseau($id);
    header('location: starW_creationAdmin.php');
?>

