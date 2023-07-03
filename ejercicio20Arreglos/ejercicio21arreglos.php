<?php

//operador => ej: "F"=> "xxxxx" sirve para asignarle el indice que nosostros queramos a algun elemento
//del array
$arreglo=array("S" =>"springboot", "L" =>"laravel" ,"P" =>"django","J"=>"node");

print_r($arreglo);

//acceso a los elementos de un arreglo mediante un foreach
foreach($arreglo as $indice =>$valor){
    echo "<br>".$valor." Es un framework para desarrollo web y tiene el indice: ".$indice;
}
?>