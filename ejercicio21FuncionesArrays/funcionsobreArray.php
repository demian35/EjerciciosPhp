<?php

$arreglo=array("Springboot","Laravel","Django","Node");

//le aplicamos al arreglo array_push para agregar elementos al arreglo
array_push($arreglo,"react","angular");

//para eliminar el ultimo elemento de un arreglo usamos arraypop 
$framework=array_pop($arreglo);

for($indice=0; $indice<count($arreglo);$indice++){
    echo "<br>".$arreglo[$indice];
}

?>