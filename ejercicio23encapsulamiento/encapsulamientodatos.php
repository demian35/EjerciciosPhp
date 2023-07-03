<?php

class Usuario{

    //atributos de la clase con sus tipos de acceso (encapsulamiento de datos)
    public $userName;
    public $apellido;
    private $media;

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

    public function asignaMedia(){
        $this->media=80;
        return $this->media;
    }

    

}

$usuario1=new Usuario();

$usuario1->asignaUsuario("jdemian");
$usuario1->asignaApellido("Salgado");
$usuario1->imprimeUsuario();
echo "<br>".$usuario1->asignaMedia();

?>