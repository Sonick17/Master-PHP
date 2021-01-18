<?php

if (!is_dir('MiCarpeta')) {
  mkdir('MiCarpeta',0777) or die('No se puede crear la carpeta');
}else {
  echo 'Ya existe carpeta';
}

// rmdir('MiCarpeta');

?>
