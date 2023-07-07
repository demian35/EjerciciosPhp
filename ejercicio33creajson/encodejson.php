<?php

//creamos el arreglo con los datos que convertiremos a json
$datos=array("Jose"=>26, "Dewitt" => 40);

//archivo json convertido mediante la funcion json_encode()
$resultado=json_encode($datos);
//regresamos el json con los datos del arreglo
echo $resultado;


?>