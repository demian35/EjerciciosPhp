<?php

    if($_POST){

        $valorA=$_POST['valorA'];//valor A
        $valorB=$_POST['valorB'];//valor b
        $operacion=$_POST['operacion'];//recibe la operacion que desea realizar el usuario

        //switch para elegir entre los distintos tipos de operaciones disponibles 
        switch($operacion){

            case 'suma':
                $resultado=$valorA+$valorB;
            break;

            case 'resta':
                $resultado=$valorA-$valorB;
            break;

            case 'multiplicacion':
               $resultado=$valorA*$valorB;
            break;
            case 'division':
                $resultado=$valorA/$valorB;
            break;
            default:
            $resultado="operacion no valida";
            break;
        }

        //immprimimos el resultado
        echo "<br> Resutado ".$resultado; 
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
    <form action="switch.php" method="post">
    Introduzca los valores que quiere calcular
        <br>
        <input type="text" name="valorA" id="">
        <br>
        <input type="text" name="valorB" id="">
        <br>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="division">division</option>

        </select>
        <input type="submit" value="calcular">
    </form>
</body>
</html>