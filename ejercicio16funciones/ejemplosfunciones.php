<?php

function imprimeNombres($nombre , $apellido){
    //rutina a ejecutar
    echo "<br> Bienvenido ".$nombre." " .$apellido ;
}


function imprimeNumeros($numero){
    //rutina a ejecutar
    for($i=0; $i<=$numero;$i++){
        echo "<br>Numero ".$i;
    }
}

//llamamos a las funciones para imprimir el resultado de la ejecucion
imprimeNumeros(15);

imprimeNombres("pedro", "Salgado");

imprimeNombres("jose", "salgado");

?>