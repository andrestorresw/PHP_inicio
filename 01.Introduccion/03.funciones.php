<?php

#Funciones sin parametros
function saludo(){
    echo "Hola<br>";
};

saludo();

$bye = 'Ciao';

#Funciones con parametros
function despedida($adios){
    echo $adios."<br>";
};

despedida($bye);

// Funciones con retorno
function retorno($retornar){
    return $retornar;
}

echo retorno("Si retorna");

?>