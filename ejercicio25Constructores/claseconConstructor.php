<?php

class Persona{

    //atributo de clase
    public $userName;
    public $apellido;

    function __construct($nuevoNombre,$nuevoApellido){
        $this->userName=$nuevoNombre;
        $this->apellido=$nuevoApellido;
    }
   

    public function imprimeUsuario(){
        echo $this->userName." ".$this->apellido;
    }

}

$usuario1=new Persona("Demian "," Jimenez");
$usuario1->imprimeUsuario();

?>