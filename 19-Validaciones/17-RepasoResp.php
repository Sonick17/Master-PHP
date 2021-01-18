<?php

  $error = "";

  if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["edad"]) && !empty($_POST["email"]) && !empty($_POST["pass"])  )
  {
    $error = 'ok';

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = (int) $_POST["edad"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $patron = "/^[a-zA-Z ]+$/i";
  }

  if(!is_string($nombre) || !preg_match($patron, $nombre) ){
    $error = 'Nombre';
  }elseif (!is_string($apellido) || !preg_match($patron,$apellido)  ) {
    $error = 'Apellido';
  }elseif (!is_int($edad) || !FILTER_VAR($edad,FILTER_VALIDATE_INT)  ) {
    $error = 'Edad';
  }elseif (!is_string($email) || !FILTER_VAR($email,FILTER_VALIDATE_EMAIL)  ) {
    $error = 'Email';
  }elseif (strlen($pass)<5 ) {
    $error = 'Password';
  }

var_dump($_POST);
  if ($error <> "ok") {
    header("location:17-Repaso.php?error=$error");
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Datos informativos</h2>
    <?= $error ?>

    <p><?= $nombre ?></p>
    <p><?= $apellido ?></p>
    <p><?= $edad ?></p>
    <p><?= $email ?></p>
  </body>
</html>
