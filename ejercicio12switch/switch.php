<?php

    if($_POST){

        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        $operacion=$_POST['operacion'];

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