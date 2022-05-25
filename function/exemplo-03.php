<?php

$y = 1;

$fn1 = fn($x) => $x + $y;
echo $fn1(54);

// Equivalente ao usar $y por valor
$fn2 = function($x) use ($y)
{
    return $x + $y;
};
