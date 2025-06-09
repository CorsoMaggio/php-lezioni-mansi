<?php
//Ciao sono un commento

/* Articolo con commento
a capo */

//Variabili, che cambiano
$stringa = 'Ciao'; // Un solo uguale, si chiama assegnazione
//Costanti, che non cambiano
const INTERO = 78; // Tutte le costanti sempre maisucolo

//Come scrivere variabili
$testoNuovoDaScrivere = 'ciaociao'; //Camel Case
$testo_nuovo_da_scrivere = 'ciaociao'; //snake Case (usatelo per i nomi dei file)
$Testo = 'ciaociao';
$TeSto = 'ciaociao';
$t2esto = 'ciaociao';

//Come NON scrivere variabili
$2ciao = 'Francesco';
$_ciao = 'Francesco';
$_ci.ao = 'Francesco';
$ ciaociao = 'cccc';

//-----

//1) Predefiniti, Scalari o PRIMITIVI
//2) Composti o USer Defined

$stringa = 'Ciao'; //String
$intero = 67890; // Intero
$float = 56.90; //FLoat (sempre i punti per la cifra con virogla mobile)
$booleano = true;//oppure false
$null = null;
 
//Stringhe
$stringa1 = 'ciao ciao';// non effettuano l'escape
$stringa2 = "$stringa1";
$stringa3 = '$stringa1';