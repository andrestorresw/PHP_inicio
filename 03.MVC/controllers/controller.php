<?php

class mvcController{

    // Llammar a la plantilla
    public function bringTemplate(){
        
        include "views/template.php";

    }


    //Interaccion del usuario
    public function enlacesPaginasController(){


        $enlaces = $_GET["action"];

        $respuesta = enlacesPaginas::enlacesPaginasModel($enlaces);

        include $respuesta;


    }

}

?>