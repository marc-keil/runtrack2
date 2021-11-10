<html>
<form action="index.php" method="post">
        <label for="prenom">Votre Prénom:</label>
    <br/>
        <input type="text" name="prenom" id="prenom">
        <label for="valider"></label>
        <input type="submit" name="valider">
        <label for="reset"></label>
        <input type="submit" name="reset" value="reset">
    </form><br/>
</html>    
<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['prenom']="";
}
    if (isset($_POST) && isset($_POST['prenom'])) {
        $_SESSION['prenom'] = $_POST['prenom']. "<br/>" .$_SESSION['prenom'] ;
    }
echo $_SESSION['prenom'];

?>
