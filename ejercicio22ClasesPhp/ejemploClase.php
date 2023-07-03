<?php

class Usuario{

    //atributo de clase
    public $userName;
    public $apellido;

    //ejemplo de un metodo
    public function asignaUsuario($nuevoUser){
        $this->userName=$nuevoUser;
    }

    public function asignaApellido($nuevoApellido){
        $this->apellido=$nuevoApellido;
    }

    public function imprimeUsuario(){
        echo $this->userName." ".$this->apellido;
    }

}

$usuario1=new Usuario();

$usuario1->asignaUsuario("jdemian");
$usuario1->asignaApellido("Salgado");
$usuario1->imprimeUsuario();

?>