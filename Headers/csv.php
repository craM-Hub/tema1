<?php
$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=productos.csv");

function crearCSV($data)
{
    foreach ($data as $key => $campo) {
        echo "$key;$campo;\n";
    }
}

crearCSV($productos);
