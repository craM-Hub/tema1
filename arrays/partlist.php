<?php

$cadena = ["Seguro", "que", "apruebo", "esta", "asignatura"];
$numPalabras = count($cadena);

$resultado = [];

function partList($cadena, $pos)
{
    $pareja = [];
    array_push($pareja, implode(' ', array_slice($cadena, 0, $pos)));
    array_push($pareja, implode(' ', array_slice($cadena, $pos, 5)));
    return ($pareja);
}


for ($i = 1; $i < $numPalabras; $i++) {

    array_push($resultado, partList($cadena, $i));
}

print_r($resultado);
