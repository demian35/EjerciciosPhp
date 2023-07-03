<?php

echo "Frameworks para desarrollo web";
echo "<br>";
$arreglo=array("springboot" , "laravel" , "django", "node");

print_r($arreglo);

//acedemos a los elementos del arreglo con un ciclo for
for($indice=0;$indice<4;$indice++){
    echo "<br>".$arreglo[$indice]; //imprimimos el arreglo
}


?>