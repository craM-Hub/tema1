<?php
    //Crea aquí tu script para seleccionar el idioma
    if (strpos($_SERVER['HTTP_USER_AGENT'], "Firefox") !== false){
         $content = "Esta es la página vista con Firefox"; 
    }else{
        $content = "Por favor, instala Firefox"; 
    }

   
	//Fin script
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

