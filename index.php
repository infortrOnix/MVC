<?php
//Mostraremos la salida al usuarioy atraves del cual enviaremos las 
//distintas acciones que el usuario envie al controlador.

require_once "control/plantillaControlador.php";

$plantilla = new PlantillaControlador();
$plantilla->ctrlTraerPlantilla();

?>