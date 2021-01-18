
<?php


  function arays($num1,$v = false ){
    $cn= "";

    foreach ($num1 as $key => $num) {
      if($v){
        $cn .= strlen($num) . "<br>";
      }
      else {
        $cn .= "$num <br>";
      }
    }
    return  $cn;
  }

  $num1= [1,25,4,14,5,16,70,81];
  echo "<h1>Mostrar Array<h1>";
  echo arays($num1);
  echo "<hr>";

  sort($num1);
  echo "<h1>Mostrar Array Ordenado<h1>";
  echo arays($num1);
  echo "<hr>";

  count($num1);
  echo "<h1>Mostrar Array Longitud<h1>";
  echo arays($num1,true);
  echo "<hr>";

  echo "<h1>Buscar Array <h1>";
  echo array_search(25,$num1);
  echo "<hr>";
?>
