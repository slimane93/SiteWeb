<?php include('fonction.php')?>

<?php
    $id=($_POST['id']);
    $url=$_POST['url'];
    $commentaire=$_POST['commentaire'];

    AddImage($id,$url,$commentaire);
    header('location: starW_creationAdmin.php');
?>

