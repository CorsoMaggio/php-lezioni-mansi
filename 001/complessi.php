<?php
//Dati complessi o user defined
//Array semplici
// $scatola1 = []; //Definzioni di array vuoto
// $scatola1 = ['ci ao', 'so no', 'io'];
// $scatola2 = [8973, 736356];

// $scatola3 = ['sjchs', 'ssx', 890, 89.90];

// echo $scatola2[1];

// //Array Chiave Valore o associativi
// $person1 = [
//     'name' => 'Francesco',
//     'surname' => 'Mansi'
// ];

// echo $person1['surname'];
//----
$user = [
    'name' => 'Francesco',
    'surname' => 'Mansi'
];

$users = ['Deborah', 'Marco', 'Vito'];

$mixed = [
    'name' => 'Antonio',
    90 => 'sss',
    89 => 'ciccio',
    34
];

var_dump($mixed);
die();

echo $mixed[90];

//Echo stampa solo numeri primitivi
//print_r stampa tutto, ma si usa per debug
///
