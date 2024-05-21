<?php

$brojevi = [250,330,1000,2000,5000];
$popust = 0.1;

function kalkPopusta($brojevi, $popust)
{
    $popusti = [];
    $ukupanPopust = 0;
    
    foreach($brojevi as &$broj){
        $pojedinaciPopust = $broj * $popust;
        
        $ukupanPopust += $broj * $popust;
        
        array_push($popusti, $pojedinaciPopust);
    }
    var_dump($popusti);
    var_dump($ukupanPopust);
   
}

kalkPopusta($brojevi,$popust);