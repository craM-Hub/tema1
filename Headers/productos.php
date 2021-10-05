<?php

$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

$producto = ($_GET['id']) ?? "nulo";

if ($producto !== 'nulo') {
    if (array_key_exists($producto, $productos)) {
        echo "Ha elegido el $productos[$producto]";
    } else {
        http_response_code(404);
        echo "La id seleccionada no existe, error: " . http_response_code();
    }
}

?>

<!doctype html>

<html lang="es">

<head>
    <meta charset="utf-8">
</head>

<body>
    <li><a href='productos.php?id=1'>Seleccionar id 1</a></li>
    <li><a href='productos.php?id=2'>Seleccionar id 2</a></li>
    <li><a href='productos.php?id=3'>Seleccionar id 3</a></li>
    <li><a href='productos.php?id=4'>Seleccionar id 4</a></li>
    </ul>
</body>

</html>