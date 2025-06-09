<?php
//3 tipi di operatori
//1) matematico
//2) confronto
//3) logico
$x = 1;
$y = 10;
//1) 
echo ($x + $y) * $x;
echo $x - $y;
echo $x * $y;
echo $x / $y;
echo ($x % $y); //Modulo resto

$a = true;
$b = false;
//$b = 'true';
//2)

$a == $b; // COnfronta solo i valori
$a === $b; //confronta i valori e il tipo

$a > $b;
$a >= $b;

$a < $b;
$a <= $b;

$a <> $b;
$a != $b;
$a !== $b;

//3)Operatori logici

$a and $b; //Entrambi devono essere veri
$a && $b;

$a or $b; //almeno 1 deve essere vero
$a || $b;

!$a;
!$b;
