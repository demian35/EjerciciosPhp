<?php

if($_POST){
    //recibimos los datos de usuario
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    //usando el operador logico and && con comparaciones de datos
    if(($valorA != $valorB) && ($valorA > $valorB)){
        echo "A es diferente a B y ademas A es mayor a B";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos en php</title>
</head>
<body>
    <form action="operadoreslogicos.php" method="post">
        Introduzca los valores que quiere comparar
        <br>
        <input type="text" name="valorA" id="">
        <br>
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="comparar">
    </form>
</body>
</html>