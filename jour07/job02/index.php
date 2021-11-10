<html>
<body>

<?php
if (isset($_POST["reset"])) {                            // reset
    unset($_COOKIE['nbvisite']);
    header('Location: index.php');
}
if (isset($_COOKIE['nbvisite'])) {                   // Compteur
    setcookie('nbvisite',$_COOKIE['nbvisite']+1);

}
else {
    setcookie('nbvisite',0,time() +365*24*3600);

}


echo $_COOKIE['nbvisite'] ;



?>

<form method=post action="index.php">                   <!--Bouton reset-->      
<input type="submit" name="reset" class="button" value="reset" >
</form>

</body>
</html>
