<?php

// Index: En el index se muestra la salida de las vistas al usuario y también a través de de él enviaremos las distintas acciones que el usuario envíe al controlador.

require_once "controllers/controller.php";

$mvc = new MvcController();
$mvc -> plantilla();

?>