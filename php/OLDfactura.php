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

