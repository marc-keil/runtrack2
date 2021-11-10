<html>
<body>

<?php


session_start();

if (isset($_SESSION['nbvisite'])) {                     // Compteur
    $_SESSION['nbvisite']++;
}

if (isset($_POST["reset"])) {                            // reset
    $_SESSION['nbvisite'] = 0;
}
echo $_SESSION['nbvisite'];

?>

<form method=post action="index.php">                   <!--Bouton reset-->      
<input type="submit" name="reset" class="button" value="reset" >
</form>

</body>
</html>