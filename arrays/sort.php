<?php
$edades = array("Juan" => "31", "María" => "41", "Andrés" => "39", "Berta" => "40");

echo "Ordenado por nombre, acendente: ";
echo "<br><br>";
ksort($edades);
print_r($edades);

echo "<br><br>";
echo "Ordenado por edad, ascendente: ";
echo "<br><br>";
asort($edades);
print_r($edades);

echo "<br><br>";
echo "Ordenado por nombre, descendente: ";
echo "<br><br>";
krsort($edades);
print_r($edades);

echo "<br><br>";
echo "Ordenado por edad, descendente: ";
arsort($edades);
print_r($edades);
