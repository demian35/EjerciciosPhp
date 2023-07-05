<?php
//mantenemos los datos de la sesion activos cuando entramos a otra pagina
session_start();

if(isset($_SESSION["user"]) && isset($_SESSION["status"])){
    echo"Inicio de sesion <br>";
    echo "Bienvenido: ".$_SESSION["user"]."<br>";
    echo $_SESSION["status"];
}else{
    echo "Sesion terminada, Hasta pronto";
}
?>