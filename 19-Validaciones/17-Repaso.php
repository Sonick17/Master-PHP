z<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validación de Formulario</title>
  </head>
  <body>



    <h2>Validación Formulario</h2>

    <?php
      if (isset($_GET['error']) ) {
        $error = $_GET['error'];
        echo '<strong style="color:red">Error en el campo '.$error.'</strong>';
      }

    ?>

    <form  action="17-RepasoResp.php" method="post" >
      <p><label for="nombre">Nombre</label></p>
      <input type="text" name="nombre" >
      <p><label for="apellido">Apellido</label></p>
      <input type="text" name="apellido" >
      <p><label for="edad">Edad</label></p>
      <input type="number" name="edad" >
      <p><label for="email">Email</label></p>
      <input type="email" name="email" >
      <p><label for="pass">Password</label></p>
      <input type="password" name="pass" >

      <p><input type="submit"  value="Enviar"> </p>
    </form>


  </body>
</html>
