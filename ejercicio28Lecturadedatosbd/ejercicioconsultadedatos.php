<?php

//datos del servidor,user y password de la BD
$servidor="localhost";
$basedatos="album";
$usuario="root";
$password="";

try{
    //conexion del tipo pdo para manipular y conectarnos a una base de datos
    $conexion=new PDO("mysql:host=$servidor;dbname=$basedatos",$usuario,$password);//creamos la conexion con la bd
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //instruccion sql para consultar lo que hay en una tabla
    $querysql = "SELECT * FROM album.fotos;";
    
    //preparamos la consulta con en metodo de pdo prepare($querysql) le pasamos la query que queremos usar
    $consulta=$conexion->prepare($querysql);
    $consulta->execute();//ejecutamos la consulta

    $resultado=$consulta->fetchAll();//regresamos el resultado de la consulta

    //imprimimos la columna que queremos consultar de la bd con un foreach
    foreach($resultado as $foto){
        print_r($foto["ruta"]);
        echo"<br>";
    }

}catch(PDOException $error){
    echo "Conexion fallida".$error;
}

?>