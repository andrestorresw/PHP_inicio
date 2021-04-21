<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <style>

header{
position:relative;
margin:auto;
text-align:center;
padding:5px;

}

nav{
position:relative;
margin:auto;
width:100%;
height:auto;
background:black;
}

nav ul{
position:relative;
margin:auto;
width:50%;
text-align:center;
}

nav ul li{
display:inline-block;
width:24%;
line-height:50px;
list-style: nome;
}

nav ul li a{
color:white;
text-decoration:nome;
}

section{
position:relative;
padding:20px;
}

</style>
</head>
<body>
<header>
    <h1>Logotipo</h1>
</header>

<!-- <nav>
    <ul>
        <li><a href="">Inicio</a></li>
        <li><a href="">Nostros</a></li>
        <li><a href="">Servicios</a></li> //Este texto a sido sacado de aqui y llevado a navegacion.php
        <li><a href="">Contacto</a></li>
    </ul>
</nav> -->
<?php
include "modules/navegacion.php"; //Aqui invoco la navegacion para que se muestre
?>

<section>
<?php

$mvc = new mvcController();
$mvc -> enlacesPaginasController();

?>
</section>

    
</body>
</html>