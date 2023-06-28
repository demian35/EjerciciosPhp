<?php

if($_POST){
    //recibimos los datos de usuario
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if($valorA > $valorB){
        echo "A es mayor que B";
    }elseif($valorA==$valorB){
        echo "A y B son iguales";
    }else{
        echo "A es menor que B";
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
    <form action="comparaciones.php" method="post">
        Introduzca los valores que quiere calcular
        <br>
        <input type="text" name="valorA" id="">
        <br>
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="compara">
    </form>
</body>
</html>