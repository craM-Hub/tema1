<?php

$nombre = ($_GET['nombre']) ?? "Marc";
?>

<!doctype html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="author" content="Marc Llop">
</head>

<body>
    <ul><?= $title ?>
        <li>Nombre: <a href='cadenas.php?nombre=Kate'>Kate</a></li>
        <li>Nombre: <a href='cadenas.php?nombre=Alejandro'>Alejandro</a></li>
    </ul>
    <p>El nombre elegido es: <?= $nombre ?></p>
    <p>Su longitud es de: <?= strlen($nombre) ?></p>

</body>

</html>