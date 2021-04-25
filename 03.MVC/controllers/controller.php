<?php

class mvcController{

    // Llammar a la plantilla
    public function bringTemplate(){
        
        include "views/template.php";

    }


    //Interaccion del usuario
    public function enlacesPaginasController(){

        if(isset($_GET["action"])){
            $enlaces = $_GET["action"];
        }else{
            $enlaces = "inicio";
        }

        $respuesta = enlacesPaginas::enlacesPaginasModel($enlaces);

        include $respuesta;


    }

}

?>