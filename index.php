<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Hola estas en la vista de clientes!</h1>
<!--<span>--><?php //echo $mensaje ?><!--</span>-->

<form method="post" action="../controlador/ClienteControlador.php">

    <input name="nombre"
           placeholder="Escriba su nombre"
           type="text">
    <br>
    <input type="text" name="apellido"
           placeholder="Escriba su apellido">
    <br>
    <input type="text" name="edad"
           placeholder="Digite su edad">
    <br>
    <br>
    <input name="agregar" value="Agregar usuario" type="submit">
</form>


<?php
foreach ($clientes as $k => $v) {
    ?>

    <p><?php echo $v['nombre'] ?></p>
    <p><a href="../controlador/ClienteControlador.php?opcion=eliminar&id=<?php echo $v['id']; ?>">Eliminar</a></p>

    <?php
}?>

</body>
</html>            