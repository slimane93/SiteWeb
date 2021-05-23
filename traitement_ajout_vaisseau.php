<?php include('fonction.php')?>

<?php
    $class=($_POST['class']);
    $mglt=$_POST['mglt'];

    AddVaisseau($class,$mglt);
    header('location: starW_creationAdmin.php');
?>

