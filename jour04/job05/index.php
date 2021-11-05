<html>
<form action="./index.php" method="post">
    <label for="Username">Username : </label>
    <input type="text" name="Username"><br><br>
    <label for="Password">Password : </label>
    <input type="password" name="Password"><br><br>
    <input type="submit" value="Connexion">
</form>

<?php 
$p1 = "C’est pas ma guerre";
$p2 = "Votre pire cauchemar";

if($_POST == true) {
if($_POST["Username"] == "John" && $_POST["Password"] == "Rambo")
{
    echo $p1;
}
    else {
        echo $p2;
    }
}










?>













</html>