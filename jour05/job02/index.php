<?php
$bonjour = ($jour = true);

function bonjour($jour) {

if ($jour) {
    echo 'Bonjour';
}
else {
    echo 'Bonsoir';
}
}

echo bonjour($jour);


?>