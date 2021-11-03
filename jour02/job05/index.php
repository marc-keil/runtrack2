
<?php

for ($a = 1; $a <= 1000; $a++)
    $isPrime[$a] = true;

// $isPrime[1] => True
// $isPrime[2] => True
// $isPrime[...] => True
// $isPrime[1000] => True


for ($a = 1; $a <= 1000; $a++) { // Tous les entrées dans $isPrime

    if (!$isPrime[$a]){ // Si il est pas premier on continue au suivant
        continue;
    }

    echo $a . "<br>"; // On l'écrit si elle est prime

    if($a != 1){ // Cas particulier du nombre premier 1

        for($aRayer = 2*$a; $aRayer<=1000; $aRayer+=$a){ // On commence a a*2 et tant que a*n <= 1000
            $isPrime[$aRayer] = false;
        }

    }
    
}


?>