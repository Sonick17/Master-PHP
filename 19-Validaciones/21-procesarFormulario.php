<?php

    echo "<br>";
    $error = "";

    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["edad"]) && !empty($_POST["email"]) && !empty($_POST["pass"]) )
    {
        $error = "ok";
        $patron = "/^[a-zA-Z ]+$/i";

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = (int) $_POST["edad"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        if(!is_string($nombre) || !preg_match($patron, $nombre) )
            $error = "nombre";
        else if(!is_string($apellido) || !preg_match($patron, $apellido))
            $error = "apellido";
        else if(!is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT))
            $error = "edad";
        else if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
            $error = "email";
        else if(!is_string($pass) || !strlen($pass))
            $error = "password";
    }
    else{
        $error = "Falta Valores";
    }

    echo $error;
    if($error != "ok")
        header("location:21-indexValidaciones.php?error=$error");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if($error == 'ok'): ?>
        <h1>Datos Formulario</h1>
        <p><?php echo $nombre ?></p>
        <p><?php echo $apellido ?></p>
        <p><?php echo $edad ?></p>
        <p><?php echo $email ?></p>
    <?php endif; ?>

</body>
</html>
