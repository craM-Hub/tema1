<?php

$temperaturasCadena = ('23,21,19,14,16,22,21,24,15,16,26,27,30,19,19,20,20');
$temperaturas = explode(",", $temperaturasCadena);
$media = 0;
$maximas;
$minimas;

foreach ($temperaturas as $temp) {
    $suma += $temp;
}

$media = $suma / count($temperaturas);
echo "La temperatura media del mes es: ", round($media, 2);
echo "<br><br>";

foreach ($temperaturas as $temp) {
    # code...
}
