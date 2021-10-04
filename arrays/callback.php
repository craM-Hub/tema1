<?php

$max = 0;
$min = 0;

function minMax($cadena)
{
    echo strlen($cadena);
};

$cadenas = array("Esta es la cadena más larga del array", "Esta es la más corta", "Esta está para rellenar hueco");
print_r(array_map("minMax", $cadenas));
