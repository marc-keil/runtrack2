<html>

    <table border=1>
      <tr>
           <th>Arguments</td>
           <th>Valeurs</td>
      </tr>

<?php
$i=0;

foreach($_GET as $key => $value){
    if (isset($value[$i]) == true){
      $i++;
    }
echo
("<tr> <td>". $key . "</td>").
("<td>". $value . "</td> </tr>");
}

?>


<form action="./index.php" method="get">
    <label for="TEST1">Nom : </label>
    <input type="text" name="Nom"><br><br>
    <label for="TEST2">Prenom : </label>
    <input type="text" name="Prenom"><br><br>
    <input type="submit" value="Envoie">
</form>




</html>