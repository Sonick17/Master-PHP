<?php

  $archivo = $_FILES['archivo'];
  $nombre = $archivo['name'];
  $tipo = $archivo['type'];

  if ($tipo == "image/jpeg") {

    if (!is_dir('images')) {
        mkdir('images',0777);
    }

    move_uploaded_file($archivo['tmp_name'],"images/$nombre");
    echo "Se realizo la carga correctamente";
    header("Refresh:5; URL= index.html");

  }else {
    header("Refresh:5; URL= index.html");
    echo 'Suba una imagen con formato correcto. Por favor ..';

  }




 ?>
