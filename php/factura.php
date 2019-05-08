<?php

// Incluimos aqui la informacion del OLDfactura.php para poder hacer que los resultados de los datos incluidos en el indexfactura.php lleguen y se introduzcan en el esquema de html de factura, que seria una simulacion de un PDF.

include_once('datosfactura.php');
include_once('funcionesfactura.php');

//Subtotal de la factura
// Ahora aqui llamamos la funcion subtotal, y como lo optimizamos y ahora hay un parametro dentro de la funcion $precioarray

// Ahora como vemos cuando hemos llamado a la funcion 'subtotal, no hemos puesto el parametro que tiene en su funcion, y colocamos fue el array de datos. Esto es porque al estar relacionados los dos archivos de funciones y datos no nos da problemas y porque en este caso queremos que se ejecute la funcion con el array de datos el cual tiene los datos que el cliente ha introducido 

echo('Subtotal = ' . subtotal($precios));


// Aqui ira la estructura del archivo factura para mostrar ya hecho el tema del PDF que nos saldra despues de todo el proceso anterior. Aqui solamente iria el resultado final

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/facturapdf.css">
    <title>Document</title>
</head>
<body>

<h1>
            Factura Online
        </h1>
    <header>
        
        <!-- article.datos*3 -->

        <article class="datos">
<!-- h4.usuario__titulo -->
<h4 class="datos__titulo">
    Datos
</h4>
<!-- ul.datos__>li*6 -->
<ul class="datos__">
    <li class="datos__numerofactura">
        Nº Factura
    </li>

    <!-- Aqui es donde ira el POST, donde introduciremos la informacion dinamica, osea los datos que introdujeron los clientes los queremos en la simulacion de PDF, osea aqui en factura.php. Esto lo haremos con POST porque ya la relacion la tenemos en el index con <form>, entonces el primero numerofactura es el titulo y el siguiente con post es el dato que trajimos con POST desde el index que tiene el <form> -->
    <li class="datos__numerofactura--post">
        <?php
        // Cada $_POSt tiene que tener obviamente un echo para que nos muestre la informacion que introdujeron los clientes en el index
    echo($_POST['numerofactura']);
    ?>
    </li>
    <li class="datos__fechafactura">
        Fecha de Factura
    </li>
    <li class="datos__fechafactura--post">
    <?php
    echo($_POST['fechacliente']);
    ?>
    </li>

</ul>


        </article>
        <article class="usuario">

        <h4 class="usuario__titulo">
            Mi empresa
        </h4>

        <ul class="usuario__">

        <!-- Como todos estos datos vienen de indexfactura.php entonces por eso usamos post. -->
        <li class="usuario__nombreEmpresa--post">

        Empresa:

        <?php
    echo($_POST['nombreusuario']);
    ?>

        </li>
    
    <li class="usuario__CIF--post">
        CIF:

        
        <?php
   echo($_POST['cifusuario']);
    ?>
    </li>
    <li class="usuario__direccion--post">
        Direccion:

        
        <?php
    echo($_POST['direccionusuario']);
    ?>
    </li>
    <li class="usuario__poblacion--post">
        Poblacion:

        
        <?php
    echo($_POST['poblacionusuario']);
    ?>
    </li>
    <li class="usuario__codigopostal--post">
        CodigoPostal:

        
        <?php
    echo($_POST['codigopostalusuario']);
    ?>
    </li>
    
        </ul>

        </article>
        <article class="cliente">
<h4 class="cliente__titulo">

Empresa Cliente:
</h4>

<ul class="cliente__">
<li class="cliente__nombreEmpresa--post">
    Empresa Cliente:

    
    <?php
    echo($_POST['empresacliente']);
    ?>
</li>
    <li class="cliente__nombreContacto--post">
        Nombre:

        
        <?php
    echo($_POST['nombrecliente']);
    ?>
    </li>
    <li class="cliente__CIF--post">
        NIF:

        
        <?php
    echo($_POST['nifcliente']);
    ?>
    </li>
    <li class="cliente__direccion--post">
        Direccion:

        
        <?php
    echo($_POST['direccioncliente']);
    ?>
    </li>
    <li class="cliente__poblacion--post">
        Poblacion:

        
        <?php
    echo($_POST['poblacioncliente']);
    ?>
    </li>
    <li class="cliente__codigopostal--post">
        CodigoPostal:

        
        <?php
    echo($_POST['codigopostalcliente']);
    ?>
    </li>
    <li class="cliente__comentario--post"></li>
</ul>
        </article>
    

    </header>

    <section>

    </section>


    <footer>


    </footer>
</body>
</html>