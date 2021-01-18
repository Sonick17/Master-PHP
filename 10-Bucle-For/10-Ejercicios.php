<?php 

    echo "<hr>";
    // for($i = 1; $i <= 40; $i++)
    // {
    //     echo "$i = " . pow($i,2) . "<br>";
    // }

    
    // if(isset($_GET['num1']) && isset($_GET['num2']) )
    // {
    //     $num1 = $_GET['num1'];
    //     $num2 = $_GET['num2'];
    // }
        
    // echo "$num1 + $num2 = " .  ($num1 + $num2) . "<br>";
    // echo "$num1 - $num2 = " .  ($num1 - $num2) . "<br>";
    // echo "$num1 * $num2 = " .  ($num1 * $num2) . "<br>";
    // echo "$num1 / $num2 = " .  ($num1 / $num2) . "<br>";

    
    // if(isset($_GET['num1']) && isset($_GET['num2']) )
    // {
    //     $num1 = $_GET['num1'];
    //     $num2 = $_GET['num2'];

    //     if($num1 < $num2)
    //     {
    //         for($i = $num1; $i <= $num2; $i++)
    //         {
    //             echo $i;
    //             if($i != $num2)
    //                 echo ", ";
    //         }
    //     }
    //     else
    //         echo "Numero 1 es mayor a numero 2";
    // }
    // else
    //     echo "No hay Datos Get <br>";


    

    echo "<table border = '1'>";
        echo "<tr>";
            for($i = 1; $i <= 10; $i++)
            {
                echo "<td>Tabla de $i </td>";
            }
        echo "</tr>";
        echo "<tr>";
            for($e = 1; $e <= 10; $e++)
            {
                echo "<td>";
                    for($c = 0; $c <= 12; $c++)
                    {
                        echo "$c x $e = " . ($c * $e) . "<br>";
                    }
                echo "</td>";
            }
        echo "</tr>";
    echo '</table>';



?>