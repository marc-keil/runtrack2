<?php

for ($nombres_de_lignes = 1; $nombres_de_lignes <= 100; $nombres_de_lignes++)
{
    if ($nombres_de_lignes % 3 ==0) #multiple de 3 
    {
        echo 'Fizz' . '<br />'; 
    }
    elseif ($nombres_de_lignes % 5 ==0) #multiple de 5 
    {
        echo 'Buzz' . '<br />'; 
    }
    elseif ($nombres_de_lignes % 3 ==0 && $nombres_de_lignes % 5 ==0) #multiple de 3 et 5  
    {
        echo 'FizzBuzz' . '<br />'; 
    }
     
    else {
        echo 'N°' . $nombres_de_lignes . '<br />';
    }
    
}







?>