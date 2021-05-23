<?php include('fonction.php')?>

<?php
    $titre=($_POST['title']);
    $date=$_POST['release_date'];
    $episode=$_POST['episode'];
    $opening=$_POST['opening'];

    AddFilm($titre,$date,$episode,$opening);
    header('location: starW_creationAdmin.php');
?>

