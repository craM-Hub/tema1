<?php

function comparacion($a, $b)
{
    $strlenA = strlen($a);
    $strlenB = strlen($b);
    if ($strlenA == $strlenB) return 0;
    return ($strlenA < $strlenB) ? -1 : 1;
}

$trabajos = array("Juan" => "Administrador de sistemas", "María" => "Programadora junior", "Andrés" => "Secretaría", "Berta" => "Seguridad informática");


echo "Ordenado por longitud de la descriptción: ";
echo "<br><br>";
uasort($trabajos, 'comparacion');


foreach ($trabajos as $t => $t_value) {
    echo "Llave=" . $t . ", Valor=" . $t_value;
    echo "<br>";
}
