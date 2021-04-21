<?php

class enlacesPaginas{

    public function enlacesPaginasModel($enlaces){
        
        if($enlaces == "inicio" || $enlaces == "nosotros" || $enlaces == "servicios" || $enlaces == "contacto"){

            $module = "views/modules/".$enlaces.".php";
        }

        return $module;

    }

}

?>