<?php

#Condiciones
$boleano = true;

if($boleano){
    echo "Si señor<br>";
}else{
    echo "No señor<br>";
}

$a = 15;
$b = 10;
if($a > $b){
    echo "a es mayor que b<br>";
}

$dia = "domingoo";

switch ($dia) {
    case 'sabado':
        echo "Es sabado";
        break;
    case 'domingo':
        echo "Es domingo";
        break;
    default:
        echo "No se que es";
        break;
}


?>