<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Hola</h1>
    
    <?php
    include "modules/navegacion.php";
    ?>

    <section>
    <?php
    $mvc = new MvcController();
    $mvc -> enlacesPaginasController();
    ?>
    </section>


</body>
</html>