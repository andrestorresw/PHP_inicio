<?php

$numero = 5;

echo "Esto es una variable numero $numero<br>";
var_dump($numero);
echo "<br></br>";

// Variable de texto
$palabra = "palabra";
echo "Esto es una variable de texto $palabra<br>";
var_dump($palabra);
echo "<br></br>";

// Variable boolena
$boleana = true;
echo "Esto es una varibale boleana: $boleana<br>";
var_dump($boleana);
echo "<br></br>";

// Variable arreglo
$colores = array('rojo', 'amarillo', 'azul');
echo "Esto es una varibale arreglo: $colores[0] $colores[1] $colores[2]<br>";
var_dump($colores);
echo "<br></br>";

// Variable arreglo con propiedades
$verduras = array("verdura1"=>"lechuga", "verdura1"=>"cebolla", "verdura3"=>"brocoli");
echo "Esto es una variable arreglo con propiedades $verduras[verdura1]<br>";
var_dump($verduras);
echo "<br></br>";

// Variable objeto
$frutas = (object)["fruta1"=>"pera", "frtua2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1<br>";
var_dump($frutas);
echo "<br></br>";


?>