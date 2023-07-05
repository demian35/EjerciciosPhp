<?php

//datos del servidor,user y password de la BD
$servidor="localhost";
$basedatos="album";
$usuario="root";
$password="root";

try{
    //conexion del tipo pdo para manipular y conectarnos a una base de datos
    $conexion=new PDO("mysql:host=$servidor;dbname=$basedatos",$usuario,$password);//creamos la conexion con la bd
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //instruccion sql para agregar algo a la base de datos
    $querysql = "INSERT INTO album.fotos (id, nombre, ruta) VALUES (null, 'jugando con mysql', 'mysql.png');";
    $conexion->exec($querysql);
    echo "Conexion exitosa";

}catch(PDOException $error){
    echo "Conexion fallida".$error;
}

?>