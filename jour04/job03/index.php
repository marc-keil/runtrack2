<?php
$i=0;

foreach($_POST as $key => $value){
    if (isset($value[$i]) == true) # ou if($value != "")
    {
   $i++;
}
}
echo $i."<br><br>";

?>


<form action="./index.php" method="post">
    <label for="TEST1">TEST1</label>
    <input type="text" id="TEST1" name="TEST1"><br><br>
    <label for="TEST2">TEST2</label>
    <input type="text" id="TEST2" name="TEST2"><br><br>
    <input type="submit" value="Envoie">
</form>