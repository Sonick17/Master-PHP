<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
	</head>
	<body>

		<h1>Formulario:</h1>
		<?php

			if(!empty($_GET['error']) and $_GET['error'] != "ok" )
			{
				$error =  $_GET['error'];
				echo "<strong style='color:red'>Correctamente el dato $error</strong> </br>";
			}

		?>

		<form action="21-procesarFormulario.php" method="POST">
			<label for="nombre">Nombre</label>
			<!-- <p><input type="text" name="nombre" required="required" pattern="[A-Za-z]+" /></p> -->
			<p><input type="text" name="nombre"/></p>

			<label for="apellido">Apellido</label>
			<!-- <p><input type="text" name="apellido" required="required" pattern="[A-Za-z]+" /></p> -->
			<p><input type="text" name="apellido" /></p>

			<label for="edad">Edad</label>
			<!-- <p><input type="number" name="edad" required="required" pattern="[0-9]+" /></p> -->
			<p><input type="number" name="edad" /></p>

			<label for="email">Email</label>
			<!-- <p><input type="email" name="email" required="required" /></p> -->
			<p><input type="email" name="email"  /></p>

			<label for="pass">Contraseña</label>
			<p><input type="password" name="pass" /></p>

			<input type="submit" value="Enviar" />
		</form>
	</body>
</html>
