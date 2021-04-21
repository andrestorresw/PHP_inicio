<?php

// Index: En el index se muestra la salida de las vistas al usuario y también a través de de él enviaremos las distintas acciones que el usuario envíe al controlador.

// require() establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la funcion require() no se encuentra saltará un error "PHP fatal error" y el programa PHP se detendrá.

// La version require_once() funciona de la misma forma que sus respectivo, salvo que, al utilizar la versión _once, se impide la carga de un mismo archivo más de una vez.

// Si requerimos el mismo código más de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases.

require_once "controllers/controller.php";
require_once "models/model.php";

$mvc = new mvcController();
$mvc -> bringTemplate();

?>