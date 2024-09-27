<?php

/**
 * @param int $n Количество сестер
 * @param int $m Количество братьев
 * @return int Количество сестер произвольного брата Алисы 
 */

function countSistersForBrother($n, $m)
{
    // У каждого брата есть все сёстры Алисы и сама Алиса
    return $n + 1;
}

$n = 3;
$m = 2;

$sistersForBrother = countSistersForBrother($n, $m);
echo "Количество сестер произвольного брата Алисы: " . $sistersForBrother;
