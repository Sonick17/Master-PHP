<?php 

    /* Tipo de datos:
    ENTERO (INT/INTERGER) 99
    COMA FLOTANTE / DECIMAL (FLOAT/DOUBLE)
    CADENAS STRING  = "HOLA YO SOY U STRING"
    BOLEANO BOOL = TRUE;

    NULL
    ARRAY(COLECCION DE DATOS)
    OBJETOS
    */

    $numero = 100;
    $decimal = 12.4;
    $string = 'Hola';
    $verdad = false;
    echo gettype($numero ); echo '<br>';
    echo gettype($decimal); echo '<br>';
    echo gettype($string ); echo '<br>';
    echo gettype($verdad ); echo '<br>';

    $miNombre[] = ' Alexander Salazar';
    // $miNombre[] = ' Alexander Salazar';
    // var_dump($miNombre);

    $nombre = "Hola $miNombre[0]";
    echo($nombre);

?>