<?php

class Usuario{

    //atributos de la clase con sus tipos de acceso (encapsulamiento de datos)
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


class Alumno extends Usuario{
    public $escolaridad;
    private $media;

    public function asignaEscolaridad($newEscolaridad){
        $this->escolaridad=$newEscolaridad;
    }

    public function asignaMedia(){
        $this->media=80;
        return $this->media;
    }

    public function imprimeUsuario(){
        echo "Hola mi nombre es: ".$this->userName." ".$this->apellido." Estudio la ".$this->escolaridad;
    }
    
}

$usuario1=new Alumno();

$usuario1->asignaUsuario("Demian");
$usuario1->asignaApellido("Jimenez");
$usuario1->asignaEscolaridad("Licenciatura");
$usuario1->imprimeUsuario();
echo "<br> Tengo una media de: ".$usuario1->asignaMedia();




?>