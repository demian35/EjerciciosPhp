<?php 

if($_POST){
    //inmprimimos lo que se esta enviando del formulario en este caso la imagen
    print_r($_POST);

    //inprimimos informacion del archio que estamos subiendo
    print_r($_FILES["subearchivo"]["name"]);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inputfile.php" enctype="multipart/form-data" method="post">
        <input type="file" name="subearchivo">
        <br>
        <input type="submit" name="envia" value="enviar">
    </form>
</body>
</html>