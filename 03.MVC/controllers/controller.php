<?php

class MvcController{
    // LLamada a la plantilla
    public function plantilla(){
        
        // include() se utiliza para invocar el archivo que contiene cófigo html. 
        include "views/template.php";
    }

    // Interaccion del usuario
    public function enlacesPaginasController(){

        $enlacesController = $_GET["action"];
        
        echo $enlacesController;
        
        $respuesta = EnlacesPaginas::enlacesPaginasModelo($enlacesController);

    }
}

?>