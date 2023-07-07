<?php

//archivo json a leer
$ejmplojson='[
    {"nombre":"Jose", "apellido":"Salgado"},
    {"nombre":"Booker", "apellido":"Dewitt"}

]';

//resultado de la decodificacion de los datos json con la funcion json_decode()
$resultado=json_decode($ejmplojson);
print_r($resultado);//imprimimos el json en forma de objeto
echo"<br>";

//imprimimos los datos del json de manera legible para el usuario
foreach($resultado as $usuarios){
     echo $usuarios->nombre." ".$usuarios->apellido;
     echo"<br>";
}

?>