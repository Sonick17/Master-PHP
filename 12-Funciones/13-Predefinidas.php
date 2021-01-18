<?php 


    echo "<br>";
    $nombre = 'Victor';
    echo  var_dump($nombre);

    echo date("D-m-Y") . "<br>";
    echo time(). "<br>";

    // FUNCIONES MATEMATICAS

    echo pow(2,4) . "<br>";
    echo rand(10,40). "<br>";
    echo pi() . "<br>";
    echo round(13.54456, 3) . "<br>";

    // FUNCIONES GENERALES

    echo gettype($nombre). "<br>";
    if(isset($nombre))
        echo "Si existe la variable ". "<br>";

    if(is_string($nombre))
        echo "Es un String". "<br>";

    if(!is_float($nombre))
        echo "No es un Float    ". "<br>";

    // LIMPIAR ESPACIO
    $letra = '            Hola mundo';
    echo trim($letra). "<br>";

    // ELIMINAR VARIABLE / INDICE
    $year = 2020;
    unset($year);
    var_dump($year);

    // COMPROBAR VARIABLE VACIA
    $tex = TRUE;
    if(empty($tex))
        echo "No tiene contenido". "<br>";
    else
        echo "Tiene contenido". "<br>";

    // CONTAR CARACTERES DE UN STRING
    $cade= "Alex";
    echo strlen($cade). "<br>";

    // ENCONTRAR CARACTER
    $frus = "La vida es bella";
    echo strpos($frus,"vida"). "<br>";

    // REMPLAZAR TEXTO
    $mivida = "normal";
    echo str_replace("normal","Genial",$mivida). "<br>";

    //CONVERTIR MAYUSCULA Y MINUSCULA
    echo  strtolower($mivida) . "<br>";
    echo strtoupper($mivida). "<br>";




?>