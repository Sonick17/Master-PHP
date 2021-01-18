<?php 

    // BULCE WHILE

    // $numero = 0;
    // while($numero <=100)
    // {
    //     echo $numero;

    //     if($numero != 100)
    //         echo ',';

    //     $numero++;
    // }

    if(isset($_GET['numero'])){
        $num = (int)$_GET['numero'];
    }
    else{
        $num = 1;
    }

    echo "Tabla de Multiplicar del $num";
    echo "<hr>";

    $i = 0;

    while($i <= 10)
    {
        echo $i . ' x ' . $num .' = ' . ($i*$num) .'<br>';
        $i++;
    }

    echo "<hr>";
    $edad = 18;
    $e = 0;
    do{
        echo "Edad Promedio $e <br>";
        $e++;
    }while( $edad >= 18 && $e <= 10 ) ;

    echo "<hr>";

?>  