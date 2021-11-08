<?php


function occurrences($str,$char){
    $y = 0;
    for ($i=0;isset($str[$i]); $i++){
        if ($char == $str[$i]){
        $y++;
    }
} 
    return $y;  
}
 echo occurrences("Patate","a");

?>




