<?php
    
    //Crea aquí tu script para seleccionar el idioma
   $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
   
	//Fin script
	if ($language == "en"){
		$content = "This page is in English";
    }else{
		$content = "Esta página está en CastellanO";
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>http headers</title>
    <meta name="author" content="Víctor Ponz">
</head>    
<body>

    <?= $content ?>
</body>
</html>

