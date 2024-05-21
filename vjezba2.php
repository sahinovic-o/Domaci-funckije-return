<?php

function izracunajPopust($cijena,$popust)
{
    $popust = $popust/100;
    $cijenaSaPopustom = $cijena * $popust;
    echo $cijenaSaPopustom;
}

$obracunatiPopust = izracunajPopust(1500,22);
echo $obracunatiPopust;