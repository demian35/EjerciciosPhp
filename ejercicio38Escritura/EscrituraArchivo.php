<?php

$newfile="file.txt";//creamos un nuevo archivo
$message="hola amigos mi nombre es Dewitt"; //informacion que quremos escribir en el archivo

$openfile=fopen($newfile,'w');//abrimos el nuevo archivo

fwrite($openfile,$message);//escribimos el mensaje en el archivo
fclose($openfile);//cerramos para que se pueda usar o leer

//agarramos el archivo creado
$file="file.txt";

if (file_exists($file)) { // Verificar si el archivo existe antes de abrirlo
    $openfile2 = fopen($file, 'r');
    if ($openfile2) { // Verificar si se pudo abrir el archivo correctamente
        $leearchivo = fread($openfile2, filesize($file));
        echo $leearchivo;
        fclose($openfile2);
    } else { //si no 
        echo "No se pudo abrir el archivo.";
    }
} else { //si  no esta o no existe dicho archivo
    echo "El archivo no existe.";
}

?>