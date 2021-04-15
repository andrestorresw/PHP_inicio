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
        echo "Es sabado<br>";
        break;
    case 'domingo':
        echo "Es domingo<br>";
        break;
    default:
        echo "No se que es<br>";
        break;
}


$x = 0;

while ($x < 10){
    echo $x, '<br>';
    $x = $x + 1;
}

echo "<br>";

for($i = 0; $i < 11; $i++){
    echo $i, '<br>';
}



?>