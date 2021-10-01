<?php

$nombres = array('Pedro', 'Marc', 'Maria', 'Marta', 'Fran', 'David', 'Nerea');

echo "El array de nombres contiene " . count($nombre) . " nombres";
echo "<br>";
echo "Normal: " . implode(" ", $nombres);
echo "<br>";
asort($nombres);
echo "Ordenado: " . implode(" ", $nombres);
echo "<br>";
$nombres = array('Pedro', 'Marc', 'Maria', 'Marta', 'Fran', 'David', 'Nerea');
echo "Reverse: " . implode(" ", array_reverse($nombres));
echo "<br>";
echo "Posición de mi nombre: " . array_search("Marc", $nombres);
echo "<br>";
echo "<br>";

$alumnos = array(
    array('id' => 0, 'nombre' => 'Pedro', 'edad' => 25),
    array('id' => 1, 'nombre' => 'Marc', 'edad' => 37),
    array('id' => 2, 'nombre' => 'Jesús', 'edad' => 20),
    array('id' => 3, 'nombre' => 'Vicente', 'edad' => 29),
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php if (count($alumnos) > 0) : ?>
        <table style="border:1px solid black; border-collapse: collapse">
            <thead>
                <tr>
                    <th style="border:1px solid black; border-collapse: collapse"><?php echo implode('</th><th style="border:1px solid black; border-collapse: collapse">', array_keys(current($alumnos))); ?></th>
                <tr>
            </thead>
            <tbody>
                <?php foreach ($alumnos as $fila) : array_map('htmlentities', $fila); ?>
                    <tr>
                        <td style="border:1px solid black; border-collapse: collapse"><?php echo implode('</td><td style="border:1px solid black; border-collapse: collapse">', $fila); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</head>

<body>

</body>

</html>


<?php

$nombresExtraidos = array_column($alumnos, 'nombre');
echo "<br>";
echo "Nombres extraídos del array alumnos";
echo "<br>";
print_r($nombresExtraidos);
echo "<br>";
echo "<br>";

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sumaNumeros = array_sum($numeros);
echo "La suma de los números del array es: ", $sumaNumeros;
?>