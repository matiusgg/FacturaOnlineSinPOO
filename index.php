<?php

$login = [

    'camilo@hotmail',
    'hola@gmail',
     'xd@gmail'
];


if( isset($_POST['email'])) {

    foreach($login AS $valor) {

        if($valor == $_POST['email']) {
            header('Location: indexfactura.php');
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <h1>

    Login Clientes
    </h1>

<div class="contenedorlogin">

<label for="text">

Nombre Cliente

</label>

<input type="email" name="emailcliente" id="emailcliente" autofocus='autofocus'>

<label for="text">
Contraseña
</label>

<input type="password" name="contraseña" id="contraseña">


<button type="submit">
          login
      </button>

</div>


</form>
</body>
</html>