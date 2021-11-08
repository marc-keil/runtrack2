<html>
    <style>
    .oui {
    display: flex;
    flex-direction: column;
    align-items: center;
    }
    </style>
    <div class="ouioui">
<form class="oui" action="./index.php" method="get">
    <label for="phrase">Veuillez insérez votre phrase :</label>
    <input type="text" id="phrase" name="str"><br>
    <label for="fonction"></label>
<select name="fonction" id="fonction">
    <option value="">Prenez une option</option><BR>
    <option value="Gras">Gras</option>
    <option value="cesar">Cesar</option>
    <option value="plateforme">Plateforme</option>
    </select>  
    <br>
    <input type="submit" value="Envoie">
</form>
</div>
<?php

foreach($_GET as $key=>$value){
    if($key=="str"){
        $string=$value;
    }elseif($key="fonction"){
        $fonction=$value;
    }
}
function Gras($str){
    $alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for($i=0;isset($str[$i]);$i++){
        for($j=0; isset($alphabet[$j]) && isset($str[$i]);$j++){
            if($str[$i]==$alphabet[$j] && isset($str[$i])){
                echo "<b>";
                while(isset($str[$i]) && $str[$i]!=" "){
                    echo $str[$i];
                        $i++;
                }
                echo "</b>";
            }
            }

    }
    }

?>

</html>