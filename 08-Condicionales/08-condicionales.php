<?php 

    

//OPERADORES DE COMPARACIÓN
    // == IGUAL
    // === IDENTICO
    // != DIFERENTE
    // <>DIFERENTE
    // !=== NO IDENTICO
    // < MENOR QUE
    // > MAYOR QUE

    // $color = 'rojo';

    // if($color == 'rojo')
    //     echo 'El Color es ' .$color;
    // else
    //     echo 'El Color no es ' .$color;

    
    $year = 2019;
    if($year >= 2019)
        echo 'Estamos en 2019 en adelante' .'<br>';
    else
        echo 'Es un año anterior 2019'.'<br>' ;


    echo '<hr>';
    $nom = 'David';
    $edad = 42;
    $may_edad = 18;

    if($edad >= $may_edad)
        echo $nom.' es mayor de edad'.'<br>';
    else 
        echo $nom. ' no es mayor de edad'.'<br>';



    echo '<hr>';
    $dia = 3;
    if($dia == 1)
        echo 'Es Lunes' . '<br>';
    else if($dia == 2)
        echo 'Es Martes' . '<br>';
    else if($dia == 3)
        echo 'Es Miercoles' . '<br>';
    else if($dia == 4)
        echo 'Es Jueves' . '<br>';
    else if($dia == 4)
        echo 'Es Viernes' . '<br>';
        

    echo '<hr>';  
    $dias=4;

    switch($dias)
    {
        case 1:
            echo 'Es lunes';
            break;
        case 2:
            echo 'Es Martes';
            break;
        case 3:
            echo 'Es Miercoles';
            break;
        case 4:
            echo 'Es Jueves';
            break;
    }

    echo '<hr>';


    goto marca;
    echo 'Es Miercoles';
    echo 'Es Miercoles';
    echo 'Es Miercoles';
    echo 'Es Miercoles';
    echo 'Es Miercoles';
    echo 'Es Miercoles';
    echo 'Es Miercoles';
    echo 'Es Miercoles';
    echo 'Es Miercoles';

    marca:
    echo 'Diferente';

    echo '<hr>';

?>