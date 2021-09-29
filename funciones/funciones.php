<?php

function insert()
{
    $tabla = "alumnos";
    $campos = array("nombre" => "Juan", "apellidos" => "Martínez");
    $tam = count($campos) - 1;
    echo "insert into $tabla (" . implode(", ", array_keys($campos));

    echo ") values (";
    foreach (array_keys($campos) as $valor => $key) {
        if ($valor == $tam) {
            echo ":$key";
        } else {
            echo ":$key, ";
        }
    }

    echo ")";
}

$ref = "insert into tabla (campos) values (valores)";
function insertReferencia($ref, $tabla, $campos)
{
    $tabla = "alumnos";
    $campos = array("nombre" => "Juan", "apellidos" => "Martínez");
    $tam = count($campos) - 1;
    $values = '';

    $camposKeys = implode(", ", array_keys($campos));

    foreach (array_keys($campos) as $valor => $key) {
        if ($valor == $tam) {
            $values .= ":$key";
        } else {
            $values .= ":$key, ";
        }
    };

    $ref = str_replace("tabla", $tabla, $ref);
    $ref = str_replace("campos", $camposKeys, $ref);
    $ref = str_replace("valores", $values, $ref);
    echo $ref;
}


function update()
{ //UPDATE alumnos SET nombre=:nombre, apellidos=:apellidos WHERE id = :id 
    $tabla = "alumnos";
    $campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");
    $tam = count($campos) - 1;
    $values = '';

    foreach (array_keys($campos) as $valor => $key) {
        if ($valor == $tam) {
            $values .= "$key=:$key";
        } else if ($key != 'id') {
            $values .= "$key=:$key, ";
        }
    };

    echo "UPDATE $tabla SET " . $values . " WHERE ";
    //echo (implode(', ', array_keys($campos, 1, true)) . "=:" .  implode(', ', array_keys($campos, 1, true)));

    foreach (array_keys($campos) as $valor => $key) {
        if ($key == 'id') {
            echo "$key=:$key";
        }
    };
}

$calcula = function ($op1, $op2, $operacion) {
    if ($operacion == '+') {
        $result = $op1 + $op2;
    } else if ($operacion == '-') {
        $result = $op1 - $op2;
    } else if ($operacion == '*') {
        $result = $op1 * $op2;
    } else {
        $result = $op1 / $op2;
    }

    echo "{$op1} {$operacion} {$op2} = $result";
};

$tabla = "alumnos";
$campos = array("nombre" => "Juan", "apellidos" => "Martínez");

echo "Funcion insert:";
echo "<br>";
insert($campos, $tabla);
echo "<br>";
echo "<br>";
echo "Funcion insertReferencia:";
echo "<br>";
insertReferencia($ref, $tabla, $campos);
echo "<br>";
echo "<br>";
echo "Funcion update:";
echo "<br>";
echo update();
echo "<br>";
echo "<br>";
$calcula(5, 13, '+');
echo "<br>";
$calcula(25, 12, '-');

?>
