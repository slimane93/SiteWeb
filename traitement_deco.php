<?php
setcookie("login", "", time()-3600);//on fait expirer le coockie 
setcookie("user" , "", time()-3600);
setcookie("type" , "", time()-3600);
setcookie("essai" , "", time()-3600);
header('Location: index.php');
?>
