<?php
//inicializamos la sesion 
session_start();

//datos que se mantendran durante la sesion
$_SESSION["user"]="Dewitt";
$_SESSION["status"]="online";

echo"Inicio de sesion <br>";
echo "Bienvenido: ".$_SESSION["user"]."<br>";
echo $_SESSION["status"];
?>