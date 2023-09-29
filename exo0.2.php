<?php

$tab = array(1500, 1700, 2200, 3300, 1800, 1700, 2000, 4000);
sort($tab);
function salaires($arg)
{
    $n = count($arg);

    if (($n % 2) == 0) {
        $resultat = ($arg[4] + $arg[3]) / 2;
        return $resultat;

    } else
        ($n - 1) / 2;


}


echo salaires($tab);