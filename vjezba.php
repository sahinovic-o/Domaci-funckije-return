<?php

function mnozenje($broj, $broj2)
{
    $rezultat = $broj * $broj2;
    return $rezultat;  // Ovde kod staje, sta god ispod napisemo nece ispisat
    
}

$pomnozeniBrojevi =  mnozenje(5,5);
echo $pomnozeniBrojevi;

$pomnozeniBrojevi = $pomnozeniBrojevi / 2;
echo $pomnozeniBrojevi;

// Ukupno: 1000;
// Sa popustom: 900;
// Popust: 100;

// $popust = 100;
// $ ukupno = 1000;
// saPopustom = $ukupno - $popust;