<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/factura.css">
    <link rel="stylesheet" href="css/resetfactura.css">
    <title>Document</title>
</head>
<body>


<!-- Solo puede haber un form, ya que si ponemos mas form, cada form tiene que tener su botton, ademas d de que confundiriamos al index, sabiendo que muchos contenidos diferentes van a otros lugares. -->
<form action="php/factura.php" method="post">


<!-- Contenedor Principal -->
    
<div class="ContenedorPrincipal">

<!-- Contenedor Cliente -->

<section>

<article>
<div class="Contenedorcliente">
<h1>
Factura Online
</h1>

<h2>
Cliente
</h2>


<!-- Contenido Informacion Cliente -->

<!--  -->

<label for="text">
Numero de Factura:
</label>
<input type="number" name="numerofactura" id="numerofactura"  autofocus='autofocus'>

<!--  -->

<label for="text">
Cliente:
</label>
<input type="text" name="nombrecliente" id="nombrecliente"  >

<!--  -->

<label for="text">
Forma de Pago:
</label>
<select name="formapagocliente">
			<option value="efectivo">Efectivo
			</option>
			<option value="TargetaCredito">Targeta de Credito
        </select>


<!--  -->


<label for="text">
Fecha:
</label>
<input type="date" name="fechacliente" id="fechacliente"  >

<!--  -->

<label for="text">
Empresa Cliente(opcional):
</label>
<input type="text" name="empresacliente" id="empresacliente" >

<!--  -->

<label for="text">
Direccion Cliente:
</label>
<input type="text" name="direccioncliente" id="direccioncliente"  >

<!--  -->

<label for="text">
Telefono Cliente:
</label>
<input type="text" name="telefonocliente" id="telefonocliente" >

<!--  -->

<label for="text">
NIF:
</label>
<input type="text" name="nifcliente" id="nifcliente" >

<!--  -->

<label for="text">
Poblacion:
</label>
<input type="text" name="poblacioncliente" id="poblacioncliente" autofocus='autofocus'>

<!--  -->

<label for="text">
Codigo Postal:
</label>
<input type="text" name="codigopostalcliente" id="codigopostalcliente" >


</div>
</article>

<!-- Contenedor Usuario -->

<article>

<div class="Contenedorusuario">
<h2>
Usuario
</h2>
<!-- Contenido Informacion Usuario -->

<!--  -->

<label for="text">
Nombre Empresa:
</label>
<input type="text" name="nombreusuario" id="nombreusuario"  autofocus='autofocus'>

<!--  -->

<label for="text">
Direccion:
</label>
<input type="text" name="direccionusuario" id="nombreusuario"  >

<!--  -->



<label for="text">
Fecha:
</label>
<input type="date" name="fechausuario" id="fechausuario" >

<!--  -->

<label for="text">
Codigo Postal:
</label>
<input type="text" name="codigopostalusuario" id="codigopostalusuario" >



<!--  -->

<label for="text">
Telefono Empresa:
</label>
<input type="text" name="telefonousuario" id="telefonousuario" >

<!--  -->

<label for="text">
C.I.F.:
</label>
<input type="text" name="cifusuario" id="c.i.f.usuario" >

<!--  -->

<label for="text">
Poblacion:
</label>
<input type="text" name="poblacionusuario" id="poblacionusuario"  autofocus='autofocus'>


</div>


</article>

<!-- Contenedor Descripcion -->
<article>

<div class="Contenedordescripcion">

<h2>
Datos Factura
</h2>

<!-- Contenido Informacion Descripcion -->

<!--  -->

<label for="text">
Descripcion
</label>
<input type="text" name="descripcion" id="descripcion" autofocus='autofocus' >

<input type="text" name="descripcion2" id="descripcion2" >

<input type="text" name="descripcion3" id="descripcion3" >

<input type="text" name="descripcion4" id="descripcion4" >

<input type="text" name="descripcion5" id="descripcion5" >


<!--  -->

<label for="text">
Precio Base
</label>
<input type="number" name="preciobase00" id="preciobase" autofocus='autofocus' required>

<input type="number" name="preciobase01" id="preciobase2" >

<input type="number" name="preciobase02" id="preciobase3" >

<input type="number" name="preciobase03" id="preciobase4" >

<input type="number" name="preciobase04" id="preciobase5" >

<!--  -->

<label for="text">
Unidades
</label>
<input type="number" name="unidades00" id="unidades" autofocus='autofocus' >

<input type="number" name="unidades01" id="unidades2" >

<input type="number" name="unidades02" id="unidades3" >

<input type="number" name="unidades03" id="unidades4" >

<input type="number" name="unidades04" id="unidades5" >


</div>


</article>
<!-- Contenedor Comentario -->

<article>

<div class="Contenedorcomentario">
<h2>
Comentario
</h2>

<textarea name="comentario" id="comentario" rows="12"></textarea>


<!-- Contenido Informacion Comentario -->



</div>


</article>
<button type="submit">
          Calcular
      </button>

      <button type="reset">
          Borrar
      </button>

      </section>

</div>
</form>
</body>
</html>

