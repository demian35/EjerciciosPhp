<?php

$ejmplojson='[
    {"nombre":"Jose", "apellido":"Salgado"},
    {"nombre":"Booker", "apellido":"Dewitt"}

]';

$resultado=json_decode($ejmplojson);
print_r($resultado);
echo"<br>";

foreach($resultado as $usuarios){
     echo $usuarios->nombre." ".$usuarios->apellido;
     echo"<br>";
}

?>