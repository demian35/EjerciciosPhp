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

    if($valorA==$valorB){
        echo "El valor A es igual a B <br>";

        if($valorA==4){
            echo "A es igual a 4 <br>";
        }

        if($valorA==5){
            echo "A es igual a 5 <br>";
        }

        if(($valorA==$valorB) && ($valorA==4)){
            echo "A es igual a B y A es igual a 4";
        }


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
    <form action="ejercicio11ifanidado.php" method="post">
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