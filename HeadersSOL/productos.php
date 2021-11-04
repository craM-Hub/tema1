<?php
	
	$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
	$id = $_GET["id"] ?? -1;
	$existe = true;
	if (!array_key_exists($id, $productos)) {
		$existe = false;
		$title = "Producto no encontrado";
		//Envía la cabecera de respuesta 404
		http_response_code(404);
	}else{
		$producto = $title = $productos[$id];
	}
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
	<meta name="description" content="PHP, MVC">
	<meta name="author" content="Víctor Ponz">
</head>
<body>
	<?php if($existe):?>
		El producto solicitado es <?=$producto?>
	<?php else:?>
		El producto <?= $id?> no existe
	<?php endif?>
</body>
</html>
