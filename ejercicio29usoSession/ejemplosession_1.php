<?php
//mantenemos los datos de la sesion activos cuando entramos a otra pagina
session_start();


echo"Inicio de sesion <br>";
echo "Bienvenido: ".$_SESSION["user"]."<br>";
echo $_SESSION["status"];
?>