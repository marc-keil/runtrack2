<?php

for ($nombres_de_lignes = 1; $nombres_de_lignes <= 100; $nombres_de_lignes++)
{
    if ($nombres_de_lignes <= 20) {
        echo '<i>N°' . $nombres_de_lignes . '</i><br />'; 
    }
    elseif ($nombres_de_lignes == 42) {
        echo 'La Plateforme_' . '<br />'; 
    }
    elseif ($nombres_de_lignes >= 25 && $nombres_de_lignes <= 50) {
        echo '<u>N°' . $nombres_de_lignes . '</u><br />'; 
    }
     
    else {
        echo 'N°' . $nombres_de_lignes . '<br />';
    }
    
}







?>