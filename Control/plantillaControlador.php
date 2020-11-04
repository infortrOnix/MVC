<?php

class PlantillaControlador{

    //llamada a la plantilla

    public function ctrlTraerPlantilla(){

        #se utiliza para invocar el archivo que contiene codigo php-html
        include_once "vista/plantilla.php";

    }


}

?>