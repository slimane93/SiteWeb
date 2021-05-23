<?php include('fonction.php')?>

<?php
    $episode=$_POST['vote'];
    $user=$_COOKIE['user'];

    if (isVote($user)==false)
    {
    // cas 1 jamais voté
    addVote($user,$episode);
    header("Location: Episode$episode.php");
    }
    else
    {
    // cas 2 deja vote
    $vote=getVote($user);
        if ($vote==$episode)
        {
            //cas 2a meme vote
            header("Location: Episode$episode.php");
        }
        else 
        {
            //cas 2b vote different
            updateVote($user,$episode);
            header("Location: Episode$episode.php");
        }

    

    }
?>