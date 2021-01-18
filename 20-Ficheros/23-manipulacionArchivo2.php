
<?php

// COPIAR ARCHIVO
  // copy("23-fichero.txt","23-fichero1.txt");

// RENOMBRAR ARCHIVO
  // rename("23-fichero1.txt","23-FicheroNuevo.txt");

// ELIMINAR ARCHIVO
  // unlink("23-FicheroNuevo.txt") or die("Error al eliminar");


  if(file_exists("23-fichero.txt"))
    echo "Existe el file";
  else
    echo "No existe el file";
