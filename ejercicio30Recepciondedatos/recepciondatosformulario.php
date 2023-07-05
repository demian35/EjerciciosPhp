<?php

//inicializamos la variable para recibir los datos del form
$nombreTxt="";

//inicializamos la variable para recibir la opcion radio seleccionada en el form
$rdsEquipo="";

//si hay post del formulario
if($_POST){
    //if ternario si nombreTxt recibe informacion del post la guardamos
    $nombreTxt=(isset($_POST["nombreTxt"]))?$_POST["nombreTxt"]:"";
    //if ternario para guardar la opcion que seleccione el usuario
    $rdsEquipo=(isset($_POST["equipo"]))?$_POST["equipo"]:"";
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
    <strong><?php echo "Le voy al:"?></strong> <?php echo $rdsEquipo;?>
    <?php } ?>

    <form action="recepciondatosformulario.php" method="post">
        <input value="<?php echo $nombreTxt; ?>" type="text" name="nombreTxt">
        <br>
        Le vas al:
        <br>
        Pumas: <input type="radio" <?php ($rdsEquipo=="Pumas")?"checked":"";?>name="equipo" value="Pumas">
        <br>
        Cruz azul: <input type="radio"<?php ($rdsEquipo=="Cruz azul")?"checked":"";?> name="equipo" value="Cruz azul">
        <br>
        America: <input type="radio" <?php ($rdsEquipo=="America")?"checked":"";?> name="equipo" value="America">
        <br>

        <input type="submit" value="Aceptar">
    </form>
    
</body>
</html>