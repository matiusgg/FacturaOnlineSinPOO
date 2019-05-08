<?php

// Las variables o arrays siempre van arriba
$precios = [];

// Como quitamos los includes_one de las funciones en el archivo funcionesfactura.php,  obviamente no habria relacion entre los dos archivos,  mas especificamente en la funcion subtotal( donde colocamos un parametro que reemplazara el array de datosfactura.php pero que no habria problema con cambiarlo porque si relacionamos con un include pero ahora poniendolo en datosfunciones.php para llamar a la funcion precio(), para que haga su trabajo, esto lo que permitira es que ya la relacion sea en todas las funciones y no solo en unas funciones commo haciamos en funcionesfactura.php que teniamos que poner sucesivamente include_once por cada funcion que queriamos relacionar), por lo cual nos permitira 
include_once('funcionesfactura.php');

// // Si queremos que en datosfactura.php cuando recojan los datos, no nos salte warning por si tienen muchos input en donde en algunos input hay datos o no ,  lo que debemos hacer es que en datosfunciones.php hagamos algo para solucionarlo para que no toquemos las funciones( que lo ideal seria que se dejara quieta la funcion ya hecha sin necesidad de agregar cosas). Lo segundo seria hacer que nos compruebe sin el array de datos hay inputs con datos o no. lo tercero seria que no nos muestre los input que no tienen datos pero si los que tienen datos, ya que lo queremos es los input que tienen datos porque queremos que se ejecute la funcion en los demas archivos. 
// Para ello hay que pensar, nos viene bien un bucle para que vaya dando giros y con if para condicionar que solo nos muestre los input con datos con isset, y el array push nos permitira que los input con datos se introduzcan dentro del array $arraysub por el mismo, por eso lo dejamos vacio, para que el array_push lo haga por si mismo.
   

for($i=0; $i < 5; $i++){

        // if(isset($_POST['preciobase' . $i])) {

            //Este array_push nos permitia introducir los datos que hay en algun input al array.

            // array_push($arrasub, $_POST['preciobase' . $i]);

            // Pero si ahora queremos que no nos muestre el dato del input que se introdujo sino ya el resultado del calculo, lo que necesitamos es llamar a una funcion anterior a la funcion que hace la operacion, esto nos viene bien para que ya nos muestre el resultado de los datos sin son varios datos en disitntos input de la misma categoria como en este caso de factura en donde tenemos 5 filas en la zona del calculo, en donde los datos recaen en los parametros de esta funcion, en este caso la funcion precio
           

            // if(isset($_POST['preciobase' . $i])) { // ACTUALIZACION:

                // NO PODEMOS USAR ISSET NE ESTE CASO PORQUE

                // Pusimos '!=' lo pusimos porque queremos que si hay un espacio vacio, no lo revise

            

                    if(($_POST['preciobase0' . $i] != "" ) && ($_POST['unidades0' . $i]) != "") {

                       array_push($precios, precio(
                          (int) $_POST['preciobase0' . $i], 
                          (int) $_POST['unidades0' . $i]));

                     // Con (int), con convierte string en Enterio, esto nos beneficia porque nos permite mas comodamente en el caso de un numero, ponerlo en entero para que vaya mejor
                    
                     }

            


            // El array_push lo que te permite es poner datos dentro de un array
        };


           // el print_r aqui te permite mostrar el contenido de un array, es mas comodo que en el echo por el tema del array
// y el <pre> nos permite visulaizar mejor el contenido de print_r
           
        echo'<pre>'; 
        print_r($precios);
        
        echo'</pre>';
       

