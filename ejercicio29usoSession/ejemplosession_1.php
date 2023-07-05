<?php

session_start();


echo"Inicio de sesion <br>";
echo "Bienvenido: ".$_SESSION["user"]."<br>";
echo $_SESSION["status"];
?>