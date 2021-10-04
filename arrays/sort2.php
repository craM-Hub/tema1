<?php

$temperaturasCadena = ('23,21,19,14,16,22,21,24,15,16,26,27,30,19,19,20,20');
$temperaturas = explode(",", $temperaturasCadena);
$media = 0;
$maximas;
$minimas;

foreach ($temperaturas as $temp) {
    $suma += $temp;
}

echo "Temperaturas del mes: " . $temperaturasCadena;

$media = $suma / count($temperaturas);
echo "<br>Temperatura media del mes: ", round($media, 2);

sort($temperaturas);
$minimas = array_slice($temperaturas, 0, 5, true);
$maximas = array_slice($temperaturas, -5, 5, true);

echo "<br>Temperaturas máximas: ";
$contador = 1;
foreach ($maximas as $key => $max) {
    if ($contador === count($maximas)) {
        echo $max;
    } else {
        echo $max . ", ";
    }
    $contador++;
}

echo "<br>Temperaturas mínimas: ";
$contador = 1;
foreach ($minimas as $key => $min) {
    if ($contador === count($minimas)) {
        echo $min;
    } else {
        echo $min . ", ";
    }
    $contador++;
}
