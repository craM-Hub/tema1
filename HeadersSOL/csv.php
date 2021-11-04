<?php
		
	// Vamos a mostrar un CSV por lo que hay que indicar el tipo mime correcto
	header('Content-type: text/csv');
	// Se llamará productos.csv
	header('Content-Disposition: attachment; filename="productos.csv"');
	$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
	foreach($productos as $id => $valor){
		echo "$id;$valor\n";
	}
?>

