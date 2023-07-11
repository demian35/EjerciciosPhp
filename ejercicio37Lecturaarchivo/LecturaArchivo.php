<?php

$archivo="texto.txt"; //archivo que queremos leer

$archivoAbierto=fopen($archivo,'r');//abrimos el archivo que queremos usar y le decimos si solo lectura 'r'

$leearchivo=fread($archivoAbierto,filesize($archivo));//leemos el archivo pasandole el archivo abierto Y su tamaño
//funcion filesize para obtener el tamaño de un archivo que estemos leyendo

echo $leearchivo; //abrimos el archivo

?>