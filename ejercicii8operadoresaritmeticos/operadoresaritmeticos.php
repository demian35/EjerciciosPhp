<?php

if($_POST){
    //recibimos los datos de usuario
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma=$valorA+$valorB; //sumamos a+b
    $resta=$valorA-$valorB;//restamos a+b
    $multiplicacion=$valorA*$valorB; //multiplicamos a+b
    $division=$valorA/$valorB;//dividimos a/b

    //imprimimos los resultados
    echo "<br>". $suma;
    echo "<br>". $resta;
    echo "<br>". $multiplicacion;
    echo "<br>". $division;

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
    <form action="operadoresaritmeticos.php" method="post">
        Introduzca los valores que quiere calcular
        <br>
        <input type="text" name="valorA" id="">
        <br>
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="calcular">
    </form>
</body>
</html>