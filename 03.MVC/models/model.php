<?php

class enlacesPaginas{

    public function enlacesPaginasModel($enlaces){
        
        if($enlaces == "nosotros" || $enlaces == "servicios" || $enlaces == "contacto"){

            $module = "views/modules/".$enlaces.".php";
        }
        else if ($enlaces == "inicio"){
            $module = "views/modules/inicio.php";
        }
        else{
            $module = "views/modules/inicio.php";
        }

        return $module;

    }

}

?>