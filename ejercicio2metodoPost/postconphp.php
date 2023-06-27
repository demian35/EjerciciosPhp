<?php

    if($_POST){
    //recibimos informacion de un formulario html por medio de un metodo post
    $nombre=$_POST['txtNombre'];

    echo"bienvenido ".$nombre;
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
    

    <form action="postconphp.php" method="post">
        name:
        <input type="text" name="txtNombre" id="" placeholder="ingrese su nombre">
        <br>
        <input type="submit" value="Aceptar" >


    </form>
</body>
</html>