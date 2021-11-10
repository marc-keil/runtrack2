<html>
<form action="index.php" method="post">
        <label for="prenom">Votre Prénom:</label>
    <br/>
        <input type="text" name="prenom" id="prenom">
        <input type="submit" name="Connexion" value="Connexion">

    </form><br/>
</html>    
<?php

if(isset($_POST['prenom']))
{
    setcookie('prenom',$_POST['prenom']);
    header('Location: index.php');
}





?>
