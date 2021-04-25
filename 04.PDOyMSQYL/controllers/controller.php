<?php

class MvcController{
    
    #Llamada a la plantilla
    public function pagina(){
        
        include "views/template.php";

    }

    public function enlacesPaginasController(){

        if(isset($_GET["action"])){
            
            $enlaces = $_GET["action"];

        }else{
            $enlaces = "index";
        }

        $respuesta = Paginas::enlacesPaginasModel($enlaces);

        include $respuesta;

    }


}

?>