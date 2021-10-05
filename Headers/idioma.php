<?php
$idioma = ($_SERVER['HTTP_ACCEPT_LANGUAGE']);
if (str_contains($idioma, "en")) {
    $content = "This page is in English";
} else {

    $content = "Esta página está en Castellano (Idioma por defecto)";
}

?>

<!doctype html>

<html lang="es">

<head>
    <meta charset="utf-8">
</head>

<body>
    <?= $content ?>
</body>

</html>