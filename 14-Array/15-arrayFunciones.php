<?php
    echo "<br>";
    $cantantes = ['Charles Cardona','Sandoval', 'Lu','Sin bandera'];
    $num = [1,3,4,5,6];
    sort($cantantes);
    arsort($num);
    array_push($cantantes,'Hermanos Moreno');

    var_dump($cantantes);
    // echo "<h1>Lista Desordenada </h1>";
    // foreach($num as $i => $n)
    // {
    //     echo "$n <br>";
    // }

    // ELIMINAR UN ELEMENTO DEL ARRAY
    // unset($num[2]);

    // echo "<h1>Lista Ordenada </h1>";
    // sort($num);
    // foreach($num as $i => $n)
    // {
    //     echo "$n <br>";
    // }

    // var_dump($num);

    // echo count($num);

    //ARRAY ALEATOREO
    // do{
    //     $ale = array_rand($num);
    //     echo "$num[$ale] <br>";
    //
    //     unset($num[$ale]);
    // }while(count($num) != 0);
    //
    //
    // //BUSQUEDAD DE ARRAY
    // echo "<br>";
    // $resul =  array_search('Sandoval',$cantantes);
    // echo $resul . "<br>";
    //
    // echo sizeof($cantantes);





?>
