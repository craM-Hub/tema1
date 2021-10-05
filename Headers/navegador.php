<?php
$navegador = ($_SERVER['HTTP_USER_AGENT']);
if (str_contains($navegador, "Firefox")) {
    $content = "Estás usando el navegador firefox";
} else {
    header("Location: ./error.php");
    exit();
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