<?php 

    // ARRAY ES UNA COLLECION O UN CONJUNTO DE DATOS/VALORES BAJO UN UNICO NOMBRE
    // PARA ACCEDER A ESOS VALORES PODEMOS USAR UN INDICE NUMERO 

    echo "<br>";
    $pelicula = "Batman";
    $peliculas = array('Batman','Spiderman','El señor de los anillos');
    $cantantes = ['Charles Cardona','Sandoval', 'Lu','Sin bandera'];

    // echo $peliculas[0];

    // RECORRER POR FOR
    echo "<h1>Lista de Peliculas</h1>";
    echo "<ul>";
        for($i = 0; $i < count($peliculas); $i++)
        {
            echo "<li>$peliculas[$i] </li>";
        }
    echo "</ul>";

    echo "<h1>Lista de Cantantes</h1>";
    echo "<ul>";
        foreach($cantantes as $key => $cantante)
        {
            echo "<li>$cantante</li>";
        }
    echo "</ul>";


    // ARRAY ASOCIATIVOS 
    $persona = [
        'nombre' => 'Alex',
        'edad' => 25,
        'promedio' => 15.7
    ];
    echo $persona['edad'] . "<br>";

    // ARRAY MULTIDIMENSIONALES
    $contactos = [
        [
            'nombre' => 'Alex',
            'edad' => 25,
            'promedio' => 15.7
        ],
        [
            'nombre' => 'Luis',
            'edad' => 30,
            'promedio' => 15.7
        ],
        [
            'nombre' => 'Merly',
            'edad' => 26,
            'promedio' => 15.7
        ]
    ];

    // echo $contactos[1]['nombre'] . "<br>";

    foreach($contactos as $key => $contac)
    {
        echo $contac['nombre'] . "<br>";
    }

?>