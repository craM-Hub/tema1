<?php
function tamanyo($cadena)
{
    return strlen($cadena);
};

$cadenas = array("Esta es la cadena más larga del array", "Esta es la más corta", "Esta está para rellenar hueco");
$longitud = array_map("tamanyo", $cadenas);
echo "Longitud máximo: " . max($longitud);
echo "<br>";
echo "Longitud mínimo: " . min($longitud);
