<?php
$temperaturas = [26, 25, 33, 28, 23, 35, 30, 27, 28, 29, 30, 31, 32, 26, 28, 30];

$media = array_sum($temperaturas) / count($temperaturas);
echo "Media: $media <br>";
echo "Mayores<br>";
print_r(array_slice($temperaturas, 0, 5);
echo "Menores<br>";
print_r(array_slice($temperaturas, 0, -5);
