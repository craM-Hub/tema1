<?php
$privada = ($_GET['dejameEntrar']) ?? 'nulo';
if ($privada == 1) {
    echo "Bienvenido estás autentificado, puedes pasar";
} else {
    header("Location: ./login.php");
    exit();
}
