<?php

$str= "I'm sorry Dave I'm afraid I can't do that.";
$i = 0;

while (isset($str[$i]) == true)
{
$voyelles = array ( 'a', 'e', 'i', 'u', 'o', 'y','A','E','I','U','O','Y' ) ;
foreach($voyelles as $value) {
if ($str[$i] == $value)
{
echo $str[$i];

}
}
$i++;
}


?>
