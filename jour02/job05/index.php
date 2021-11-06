<?php
echo 'Nombre premier de 0 a 1000:';

$i = 0;



while ($i <= 1000)
{
    $x = 1;
    $y= 0;

    while ($x <= $i)
    {   
        if($i % $x == 0)
        {
        $y++;
        }
        $x++;
    }

    if ($y == 2)
    echo '<br>'.$i ;

    $i++;
}
?>
