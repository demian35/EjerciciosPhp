<?php

//url de la api a utilizar api de thecocktailDB lista de cockteles con vodka
$url="https://www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita";

//arreglo para poder acceder a una api con https
$opciones=array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

//respuesta de la api la convertimos a una cadena para poder leerlo mediante la funcion file_get_contents()
$respuesta=file_get_contents($url,false,stream_context_create($opciones));

//regresamos los datos de la api
$apitraducida=json_decode($respuesta);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
        }
        
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        
        li {
            margin-bottom: 10px;
        }
        
        p {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <p>Margaritas</p>
    <ul>
        <?php foreach($apitraducida->drinks as $bebidas){ //imprimimos los datos en orden de lista ?>
        
        <li><?php echo $bebidas->strDrink ?>|<?php echo $bebidas->strAlcoholic ?></li>|

        <ul>
            <li><?php echo $bebidas->strInstructions ?></li>
            <p>Ingredientes</p>
            <li><?php echo $bebidas->strIngredient1 ?></li>
            <li><?php echo $bebidas->strIngredient2 ?></li>
            <li><?php echo $bebidas->strIngredient3 ?></li>
            <li><?php echo $bebidas->strIngredient4 ?></li>
            <li><?php echo $bebidas->strIngredient5 ?></li>
            <li><?php echo $bebidas->strIngredient6 ?></li>
            <li><?php echo $bebidas->strIngredient7 ?></li>
            
            
            

        </ul>
              
        <?php } //cierra foreach?>
            
        
    </ul>
</body>
</html>