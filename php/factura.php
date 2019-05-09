<?php


// EXPLICACION ANTERIOR, VALE LA PENA LEERLO, PARA ENTERNDER MEJOR


// Este archivo servira para poder explicar todo el funcionamiento del proyecto FACTURA. ESta es el archivo viejo de factura.php
// Queremos que los datos del indexfactura que introduzcamos  vayan a algun lugar, tiene que haber algun archivo donde se recompilen, el cual seria este.

// Antes de comenzar tenemos que saber que es como si fuera una cadena de relacion de archivos para llegar a su objetivo final, Tenemos que saber antes que en datosfactura.php fue enviado los input del indexfactura mediante el form action, ya en el archivo datosfactura.php, tenemos que poner POST, para que se relacionen los dos archivos y asii hacer que se envien en datosfactura.php, lo introducirlo ya sea en una variable o un array, en este caso un array. Despues en funcionesfactura.php donde obviamente tenemos las funciones con las operaciones, incluimos con 'include' el archivo de datosfactura.php dentro de la funcion que queremos que realice su funcion con los datos que trajimos  de datosfactura.php con 'include'. Ahora mismo tendriamos los datos dentro de la funcion para que realice sus operaciones pero no la hemos llamado, para que lo ejecute, entonces llamamos a la funcion que queremos pero en un nuevo archivo ya que nos viene mejor que los resultados se recopilen en un solo archivo y no dentro del mismo archivo de funciones, por lo cual usamos factura.php. En donde llamamos la funcion. Lo cual al final cuando enviemos los datos de los input en indexfactura lleguen hasta aqui, a factura.php. Como vez es como una cadena de relacionar archivos, los cuales cada uno cumple su propia funcion.

// Lo anterior es una forma por cadena, pero podemos hacerlo de una marera mas efectiva, 

// Ahora llamamos los parametros con su funcion

// Factura = 

// CLiente

// Usuario

// Datos Factura Cantidad por filas

// Como vemos incluimos los dos archivos, pero siguiendo un orden donde el archivos datosfactura debe ir antes que funciones, para que el include de fucnionesfactura haga su trabajo, es lo mismo que por cadena como al principio explique, pero de una forma mas rapidom sin poner includes entre los archivos de funcionesfacturas y datosfacturass.


// La funcion es parametrizada, es decir podemos volver a usarla de una forma mas optima en otros archivos

 //include_once('datosfactura.php');
 // include_once('funcionesfactura.php');

//Subtotal de la factura
// Ahora aqui llamamos la funcion subtotal, y como lo optimizamos y ahora hay un parametro dentro de la funcion $precioarray

 //echo('Subtotal = ' . subtotal($precios));

// IRPF
//IVA
// Total de la Factura

// FIN EXPLICACION ANTERIOR

// Incluimos aqui la informacion del OLDfactura.php para poder hacer que los resultados de los datos incluidos en el indexfactura.php lleguen y se introduzcan en el esquema de html de factura, que seria una simulacion de un PDF.

include_once('datosfactura.php');
include_once('funcionesfactura.php');

//Subtotal de la factura
// Ahora aqui llamamos la funcion subtotal, y como lo optimizamos y ahora hay un parametro dentro de la funcion $precioarray

// Ahora como vemos cuando hemos llamado a la funcion 'subtotal, no hemos puesto el parametro que tiene en su funcion, y colocamos fue el array de datos. Esto es porque al estar relacionados los dos archivos de funciones y datos no nos da problemas y porque en este caso queremos que se ejecute la funcion con el array de datos el cual tiene los datos que el cliente ha introducido 

// echo('Subtotal = ' . subtotal($precios));

$sumadetotales = subtotal($precios);

// Aqui ira la estructura del archivo factura para mostrar ya hecho el tema del PDF que nos saldra despues de todo el proceso anterior. Aqui solamente iria el resultado final

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- el reset.cc ssiempre debe ir primero cuando relacionemos los archivos html con css, para que no nos borre lo que hagamos en el archivo css -->
    <link rel="stylesheet" href="../css/resetfactura.css">
    <link rel="stylesheet" href="../css/facturapdf.css">
    
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

    <section >

    <article class="filas_titulos">

    <!-- un span es un bloque con el tamaño respectivo del contenido, no es una caja en inline, si div es bloque, span es para inline -->

    <!-- titulos -->

<span>Descripcion</span>
<span>Precio/Unidad</span>
<span>Unidades</span>
<span>Importe</span>
    </article>

    <article class="filas_datos">

    <!-- un span es un bloque en inline, si div es bloque, span es para inline -->



<span>


<!-- Como vemos queremos que en el inporte salga el calculo de la funcion 'precio', pero no ponemos sus parametros porque lo que queremos es que haga susu calculos con el array del archivo datosfactura.php -->
    
<?php

// echo('importe fila 1 = ' . $precios [0]); 

?>
    

</span>

<?php

// Ahora lo que vamos hacer aqui es que auqneu si nos da con la 1 fila introduciendo los datos, y llamando la funcion precio con el array del archivo datosfactura.php. Los demas si no los rellenamos nos van a dar error debido a que nos exige que pongamos datos sobretodo a la hora de llamar la funcion de nuevo. Para ello vamos a hacer un bucle en donde digamos que revise los input si hay datos o no y que solo nos muestre los inputs que tienen datos. Tenemos qu tener en cuenta que en datosfactura.php tenemos las condicion y el bucle con array push para que si hay un espacio vacio no nos lo ponga

// con foreach porque como $precios de datosfunciones.php es un array, entonces nos viene mejor el foreach, ademas de que el foreach nos permite revisar si hay datos o no y poner los que estan y los que pues no. Ademas nos viene bien contarlos los subarray del array $precios del archivo datosfactura.php con el fin de que en el 'inporte' de cada fila donde llamamos la funcion con el array del archivo de datos $precios nos de el resultado de esa linea especifica obviamente si lo pensamos nos vendria bien simplemente colocarle la posicion en el array ejm: [1]. Pero es mejor un contador para que por si solo vaya aumentando y cambiando de posicion a la posicion correcto, para ello se coloca la variable la definimos de $cotandor se coloca fuera, para despues colocar dentro de foreach el aumentador $contador++, para despues contcatenar en el POST donde estamos 'llamando' a los input, contacatenamos $contador para que nos permite añadir un numero mas dentro del input de POST, esto hara que cada vez que haga el bucle vaya sumando un numero dentro del name del INPUT.
// Al final el contador nos permite cambiar la posicion de la fila para que haga el resultado correspondiente a esa fila que corresponde.
$contador = 0;

foreach($precios AS $valor) {

    // Lo que ahora hacemos con este if es condicionarle que el array sea diferente de NULL 

    if($valor != NULL) {

    echo('<!-- Linea/fila -->');

    echo('<span>');

    
    echo($_POST['descripcion0' . $contador]);
    

echo('</span>');
echo('<span>');


    echo($_POST['preciobase0' . $contador]);
    

echo('</span>');
echo('<span>');


    echo($_POST['unidades0' . $contador]);
    

echo('</span>');

echo('<span>');


    echo('importe = ' . $valor );
    

echo('</span>');

    }

$contador++;

}

// Estas lineas de codigo que van aca son antes del foreach, lo que vemos es el mismo procedimiento pero en vez de hacerlo tan largo con un foreach nos permite hacerlo mas comodamente con un bucle y con un solo una fila como base pero crear los bucles necesarios para hacer las demas filas

//<!-- Linea/fila 01 -->

//<span>
   // <!-- Aqui tambien iria el tema del $_POST con los inputs del index, y asi //sucesivamente -->
    //<?php
   // echo($_POST['descripcion00']);
    //?

//</span>
//<span>

//<?php
    //echo($_POST['preciobase00']);
    //?

//</span>
//<span>

//<?php
   // echo($_POST['unidades00']);
    //?

//</span>


    //echo('<!-- Linea/fila 03 -->');

    // echo('<span>');

    
    // echo($_POST['descripcion02']);
    

// echo('</span>');
// echo('<span>');


    // echo($_POST['preciobase02']);
    

// echo('</span>');
// echo('<span>');


    // echo($_POST['unidades02']);
    

// echo('</span>');

// echo('<span>');


    // echo('importe fila 3 = ' . $valor );
    

// echo('</span>');

    // echo('<!-- Linea/fila 04 -->');

    // echo('<span>');

    
    // echo($_POST['descripcion03']);
    

// echo('</span>');
// echo('<span>');


    // echo($_POST['preciobase03']);
    

// echo('</span>');
// echo('<span>');


    // echo($_POST['unidades03']);
    

// echo('</span>');

// echo('<span>');


    // echo('importe fila 4 = ' . $valor [3]);
    

// echo('</span>');


    // echo('<!-- Linea/fila 05 -->');

    // echo('<span>');

    
    // echo($_POST['descripcion04']);
    

// echo('</span>');
// echo('<span>');


    // echo($_POST['preciobase04']);
    

// echo('</span>');
// echo('<span>');


    // echo($_POST['unidades04']);
    

// echo('</span>');

// echo('<span>');




    // echo('importe fila 5 = ' . $valor);
    
// echo('</span>');


?>



    </article>



    </section>


    <footer>
<?php
    // subtotal

echo('<br>' . $sumadetotales);

//IRPF

echo('<br>' . irpf($sumadetotales));

// IVA

echo('<br>' . iva($sumadetotales));

// TotalFactura. Aqui ponemos el array de datos $precios porque $precios contiene todas las operaciones anteriores  ademas de sus funciones, porque ahora mismo $precios es global porque lo que hicimos en datos y con los includes fue hacer que este array recopilara todo.

echo('<br>' . totalfactura($precios));

?>
    </footer>



   



</body>
</html>