<?php

//inicializamos la variable para recibir los datos del form
$nombreTxt="";

//si hay post del formulario
if($_POST){
    //if ternario si nombreTxt recibe informacion del post la guardamos
    $nombreTxt=(isset($_POST["nombreTxt"]))?$_POST["nombreTxt"]:"";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de prueba</title>
</head>
<body>
    <?php if(isset($_POST["nombreTxt"])){?>
    <strong><?php echo "Hola :"?></strong>: <?php echo $nombreTxt;?>
    <?php } ?>

    <form action="recepciondatosformulario.php" method="post">
        <input value="<?php echo $nombreTxt; ?>" type="text" name="nombreTxt">
        <input type="submit" value="Aceptar">
    </form>
    
</body>
</html>