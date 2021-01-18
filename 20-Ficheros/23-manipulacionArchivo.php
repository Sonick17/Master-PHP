<?php

// $archivo = fopen("23-fichero.txt","r");

// A+ PERMITE EDITAR Y LEER ARCHIVO
  $archivo = fopen("23-fichero.txt","a+");

  echo "<br>";
  while(!feof($archivo))
  {
    $contenido = fgets($archivo);
    echo $contenido . "<br>";
  }

  // INSERTAR FILAS EN ARCHIVO
  fwrite($archivo , "\n Hola soy feliz");
  fwrite($archivo , "\n Porque ahora");


  // CERRAR ARCHIVO
  fclose($archivo);
