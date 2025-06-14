<?php
//Date le seguenti variabili:


//Dicharazione Varabili
$a = false;
$b = true;
$c = true;
$d = false;


// Utilizzando la logica di un Sudoku, completare lo schema qui sotto riportato cosi da ottenere i valori stampati dai var_dump() a fondo pagina.

// Ogni blocco dovrà tassativamente avere:

// - 3 AND (&&)
// - 3 OR ( || );
// - 3 TRUE
// - 3 FALSE
// - Non ci sono limitazioni sull’operatore di negazione ( ! )
//Primo Blocco Esempio Completo
$ab = !$a && $b; //true
$ad = $a || $d; // false
$bc = $b && $c; //True
$bd = !$b || $d; //False
$cb = $c && $b; //True
$ca = !$c || $a; //false

//Secondo Blocco Da completare
$cabc =
    $cbbc =
    $bdab =
    $bccb = $bc && !$cb;
$bcab = !$bc || !$ab;
$bcca =

    //Terzo Blocco Da completare
    $cbbccabc = $cbbc || $cabc;
$bccbbdab =
    $cabcbcca = $cabc && $bcca;
$bdabbccb = $bdab && $bccb;
$cbbcbccb =
    $cabcbccb =

    //Output Esempio Completo
    var_dump($cbbccabc); //True
var_dump($bccbbdab); //True
var_dump($cabcbcca); //False
var_dump($bdabbccb); //False
var_dump($cbbcbccb); //False
var_dump($cabcbccb); //True