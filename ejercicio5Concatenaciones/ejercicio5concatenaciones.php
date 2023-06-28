<?php

    if($_POST){
    //recibimos informacion de un formulario html por medio de un metodo post
    $nombre=$_POST['txtNombre'];
    $apellido=$_POST['txtApellido'];

    echo"Bienvenido ".$nombre." ".$apellido;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="ejercicio5concatenaciones.php" method="post">
        name:
        <input type="text" name="txtNombre" id="" placeholder="Ingrese su nombre">
        <br>
        Apellido:
        <input type="text" name="txtApellido" placeholder="Ingrese su apellido">
        <br>

        <input type="submit" value="Aceptar" >


    </form>
</body>
</html>