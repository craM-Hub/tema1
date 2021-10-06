<?php

$cadena = ["Seguro", "que", "apruebo", "esta", "asignatura"];
$numPalabras = count($cadena);

$resultado = [];




for ($i = 1; $i < $numPalabras; $i++) {
    $pareja = [];
    array_push($pareja, implode(' ', array_slice($cadena, 0, $i)));
    array_push($pareja, implode(' ', array_slice($cadena, $i, 5)));
    array_push($resultado, $pareja);
}

print_r($resultado);
