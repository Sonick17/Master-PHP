<?php


if (isset($_GET['num1']) and isset($_GET['num2']) ) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo "<table border ='1'>";
    echo "<tr>";
    for ($i=1; $i <= $num1 ; $i++) {
      echo "<td>";
      echo "Tabla $i";
      echo "</td>";
    }
    echo "</tr>";

    for ($i=1; $i <= $num2 ; $i++) {
      echo "<tr>";
      for ($j=1; $j <= $num1 ; $j++) {
        echo "<td>";
        echo "$i * $j = ". ($j * $i) . "<br>";
        echo "</td>";
      }

      echo "</tr>";
    }


    echo "</table>";
}


?>
