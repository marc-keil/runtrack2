<?php

if(isset($_POST['prenom']))
{
    setcookie('prenom',$_POST['prenom'], time()+3600);
    header('Location: index.php');
}
if(isset($_POST['deco'])){
    unset($_COOKIE['prenom']);
    // header('Location: index.php');
}

?>

<html>
    <?php 

if(!isset($_COOKIE['prenom'])) {
echo "
<form action='index.php' method='post'>
<label for='prenom'>Votre Prénom:</label><BR>
<br/>
<input type='text' name='prenom' id='prenom'><br><br>
<input type='submit' name='Connexion' value='Connexion'>
</form><br/>
";
}
else {
    echo 
    "Bonjour ".$_COOKIE['prenom'].
    " !
    <form action='index.php' method='post'<br><br>  
    <input type='submit' name='deco' value='Déconnexion'>
    </form><br/>
    ";
}
    ?>
</html>    