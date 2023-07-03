<?php

class ClaseEjemplo{
    public static function funcionEstatica(){
        echo "Hello world";
    }
}

//intancia de objeto para usar sus metodos (forma tradicional)

$claseejemplo= new ClaseEjemplo();

$claseejemplo->funcionEstatica();

//llamando metodo estatico de ClaseEjemplo por medio de una referencia a la clase con el operador ::
ClaseEjemplo::funcionEstatica()
?>