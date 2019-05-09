<?php


// PARAMETRO: Bospermite recopilar datos que le demos para que nos realice las operaciones de la funcion

// Calcular el precio
// sumar precio * cantidad - descuento 

function precio($precioUnidad, $cantidad, $descuento = 0 ){ // las variables que tenemos son arbitrarias, por lo cual hay que mirar bien si ponerlas en () de la funcion



$multiplicar = $precioUnidad * $cantidad;

// $descuento es un porcentaje

// $restar = $multiplicar - $descuento; // este descuento debe ir en % por lo cual no es lo mismo que un entero, por lo cual lo colocaremos en entero


// si esto fuera un porcentaje entonces seria $multiplicar = $precioUnidad * $cantidad; // $porcentaje = $multiplicar - $descuento; // $solucion = $multiplicar - $porcentaje; lo cual es lo que haremos

$porcentaje = $multiplicar * $descuento;

$solucion = $multiplicar - $porcentaje;
return $solucion;
// si colocamos todos los datos en solo sitio o una sola linea, sin especificar es e novatos, porque hay que haber un orden

}

// Calcular el subtotal
// La suma de todos las filas de precios. Ya que son apenas 5 filas podemos hacer aqui en esta funcion sumar todas las filas, para ello vamos a llamar a la funcion 'precio' porque esta funcion ya nos hizo el trabajo, y este valor que nos de l a funcion 'precio' lo repètimos 5 veces porque son 5 filas,  mismo, ya que la anterior

function subtotal ($array) {

    // TRaer array desde datosfactura.php con include, es decir, poder traer el arrya de datosfactura.php para poder hacer la funcion con foreach que nos servira para hacer los calculos
    
    // Hacer un bucle con forache porque es un array, lo que queremos es que cada vez que nos haga una 'vuelta' en el array, nos sume uno, para que estemos en el siguiente subarray

    // ACTUALIZACION: Ahora como funcionesfactura.php y datosfactura.php estan incluidos en facturas.php todo la informacion y la llamada de las funciones iran en factura.php, entonces, ya no habria una relacion con funcionesfactura.php y datosfactura.php, para solucionarlo quitariamos los includes que tenemos en las funciones, en el caso de la funcion subtotal( ponemos un parametro para cubrir la variable en el forache), y ponemos el include que relacione a estods dos archivos en el archivo de datosfactura.php porque asi ya la relacion va a ser general con tas las funciones, en vez de ir poniendo cada include en cada funcion a la cual queremos llamar. Esto nos viene mejor por optimizacion

    $Sumavalor = 0;
    foreach($array AS $valor) {
     

        // si queremos que al hacer el bucle e ir por cada subarray, entonces lo que queremos es que sume el anterior subarray con el actual array, para ello necesitamos crear una variable donde nos quede claro que queremos sumar esta variable( que aun no vale nada) con $valor, para que cuando vuelva hacer el bucle, ya esta nueva variable tiene el valor de $valor, y asi sucesivamente

    $Sumavalor += $valor;
   // var_dump($Sumavalor);

    // $forache ya hace el trabajo de contador, por lo cual no es necesario un $i++

    

    // Al finla si queremos que se realice la funcion con todo, se llama.
    };

    // el return debe estar afuera de un condicional o bucle, pero dentro de la funcion, porque sino, te va a retornar el mismo valor sin realizarte la condicion o bucle
return $Sumavalor;



}


//calcular el IRPF
//Multiplicar el subtotal * 0.10 y sumar al subtotal

// el subtotal es: Sale de la suma de la funcion precio por cada fila, que es lo que hicimos en la funcion subtotal
function irpf($subtotal, $irpf = 0.10){
    $porcentaje = $subtotal * $irpf;
    // $solucion = $subtotal - $porcentaje;
    return $porcentaje;
    }
 
 
 // Calcular el IVA
 //Multiplicar el subtotal * 0.21 y sumar al sodium_crypto_box_keypair_from_secretkey_and_publickey
 function iva($subtotal, $iva = 0.21){ // cuando le ponemos el valor a un parametro nos permite que cada vez que haga la operacion, lo haga con el valor que le pusimos al parametro obviamente, esto  es mejor que asignarle un valor desde dentro y no estableciendo el valor fijo
 $porcentaje = $subtotal * $iva;

 // pusimos en comentarios esto porque no necesitamos que nos haga una operacion final, solo que nos muestre el dato final
   // $solucion = $subtotal + $porcentaje;
 return $porcentaje;
 }

 // Total factura
 // suma de todas las filas = subtotal
 // subtotal - irpf + iva = Total factura

 function totalfactura($array) {

    // Aca le colocamos el parametro $array a esta funcion para que recopile los datos de las funciones anteriores por eso si queremos que se recopilen este nuevo nuevo parametro debe llamarse igual que los parametros de las funciones para que se recopilen
// como necesitamos la informacion anterior para hacer las operaciones, simplemente para no repetir de nuevo todo, llamamos a las demas funciones que hemos hecho

// Llamamos las funciones dentro de nuevas variables para definirlas, esto para en $solucion nos viene bien

 $subtotal = subtotal($array); // Ahora como hemos actualizado y ahora la funcion tiene un nuevo parametro $array, por lo cual es importante que siempre pongamos los parametros que necesitemos// ejm: Si subtotal son 100euros
 // Asi llamamos a una funcion, por su nombre y () , dentro de () irian los parametros, si los hay se ponen, si no, pues no.
 $irpf = irpf($subtotal); // $irpf); Aqui no hemos llamado al parametro porque ya lo hemos definido en su funcion respectivamente  // 100euros - 10(irpf/porcentaje)
 // como vemos la funcion irpf tiene como parametro la funcion subtotal, por lo cual como anteriormente ya la definimos en esta nueva funcion, entonces podemos colocarlo
 $iva = iva($subtotal);// $iva); // 100euros + 20(iva/porcentaje)

  $solucion = $subtotal - $irpf + $iva;

 return $solucion;

 }
 
 
 
 ?>

