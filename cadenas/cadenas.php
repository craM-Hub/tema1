<?php

$nombre = ($_GET['nombre']) ?? "Marc";
$prefijo = ($_GET['prefijo']) ?? "";
$contienePrefijo = "";
$url = 'http://username:password@hostname:9090/path?arg=value';

if ($prefijo != "") {
    if (strpos($nombre, $prefijo) === false) {
        $contienePrefijo = "$nombre no contiene el prefijo";
    } else {
        $contienePrefijo = "$nombre comienza por el prefijo seleccionado";
    };
}
?>

<!doctype html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="author" content="Marc Llop">
</head>

<body>
    <h3>Un parámetro:</h3>
    <ul><?= $title ?>
        <li>Nombre: <a href='cadenas.php?nombre=Kate&prefijo=Ka'>Kate</a></li>
        <li>Nombre: <a href='cadenas.php?nombre=Alejandro&prefijo=Ka'>Alejandro</a></li>
    </ul>
    <p>El nombre elegido es: <?= $nombre ?></p>
    <p>Su longitud es de: <?= strlen($nombre) ?></p>
    <p>En mayúsculas: <?= strtoupper($nombre) ?></p>
    <p>En minúsculas: <?= strtolower($nombre) ?></p>
    <br>
    <h3>Cambiar prefijo</h3>
    <ul>
        <li>Prefijo Ka: <a href='cadenas.php?nombre=<?= $nombre ?>&prefijo=Ka'>Ka</a></li>
        <li>Prefijo La: <a href='cadenas.php?nombre=<?= $nombre ?>&prefijo=Al'>Al</a></li>

    </ul>
    <br>
    <h3>Prefijo: <?= $prefijo ?></h3>
    <p><?= $contienePrefijo ?></p>
    <br>
    <h3>Contador letra a/A:</h3>
    <p><?php echo "$nombre contiene ", substr_count(strtolower($nombre), 'a') . " letra/s a" ?></p>
    <br>
    <h3>Posición de la primera a/A:</h3>
    <p><?php
        $pos = stripos(strtolower($nombre), 'a');
        if ($pos === false) {
            echo "No existe la letra seleccionada";
        } else {
            echo "Posición: ", $pos;
        }

        ?></p>
    </p>
    <h3>Sustitución letra o por 0</h3>
    <p>
        <?php echo "Nombre original: $nombre"; ?>
    </p>
    <p>
        <?php echo "Nombre cambiado: ", str_ireplace('o', '0', $nombre); ?>
    </p>
    <br>
    <h3>Parse URL</h3>
    <p>
        <?php
        echo parse_url($url, PHP_URL_SCHEME) . "<br>";
        echo parse_url($url, PHP_URL_USER) . "<br>";
        echo parse_url($url, PHP_URL_PATH) . "<br>";
        echo parse_url($url, PHP_URL_QUERY) . "<br>";
        ?>
    </p>
</body>

</html>