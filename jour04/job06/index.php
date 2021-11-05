<html>
<form action="./index.php" method="get">
    <label for="Nombre">Nombre : </label>
    <input type="number" name="Nombre"><br><br>
    <input type="submit" value="Tester">
</form>

<?php
$i = 0;
if (isset($_GET['Nombre']) == true)
{
    if ($_GET['Nombre'] % 2 == 0) {
        echo $_GET['Nombre']. ' est paire' . '<br/>';
    }
    else {
        echo $_GET['Nombre'] . ' est impaire' . '<br/>';
    }
    $i++;
}









?>








</html>