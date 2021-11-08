<?php
function calcule($a,$operation,$b){
switch($operation) // Switch = Pareil que if 
{
    case"+":
        $resultat = $a + $b;
        break;
    case"-":
        $resultat = $a - $b;
        break;
    case"*":
        $resultat = $a * $b;
        break;
    case"/":
        $resultat = $a / $b;
        break;
    case"%":
        $resultat = $a % $b;
        break;
}
return $resultat;
}
echo(calcule(10,"*",8));

?>