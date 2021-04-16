<?php

#Codigo imperativo

$automovil1 = (object)["marca"=>"Toyota", "modelo"=>"Corolla"];
$automovil2 = (object)["marca"=>"Hundai", "modelo"=>"Accent"];


function mostrar($auto){
    echo "<p>Hola soy un $auto->marca modelo $auto->modelo</p>";
}

mostrar($automovil1);

mostrar($automovil2);



?>