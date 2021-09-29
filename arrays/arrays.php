<?php

$nombres = array('Pedro', 'Marc', 'Maria', 'Marta', 'Fran', 'David', 'Nerea');

echo "El array de nombres contiene " . count($nombre) . " nombres";
echo "<br>";
echo "Normal: " . implode(" ", $nombres);
echo "<br>";
asort($nombres);
echo "Ordenado: " . implode(" ", $nombres);
echo "<br>";
$nombres = array('Pedro', 'Marc', 'Maria', 'Marta', 'Fran', 'David', 'Nerea');
echo "Reverse: " . implode(" ", array_reverse($nombres));
echo "<br>";
echo "Posición de mi nombre: " . array_search("Marc", $nombres);
