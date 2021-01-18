<?php 

    echo "<br>";
    $num = [1,12,33,4,5,16,7,8];


    function mostrarArray($opt = false)
    {
        global $num;
        $text = "";
        foreach($num as $i => $n) 
        {
            if($opt)
                $text.= strlen($n) . "<br>";
            else
                $text.= $n . "<br>";
        }       

        return $text;
    }



    echo "<h1>Mostrar</h1>";
    echo mostrarArray();

    echo "<h1>Mostrar Ordenado</h1>";
    sort($num);
    echo mostrarArray();

    echo "<h1>Mostrar Longitud</h1>";
    echo mostrarArray(true);

    echo "<h1>Mostrar Elemento</h1>";
    echo sizeof($num) . "<br>";

    echo "<h1>Buscar elemento</h1>";
    // echo "<br>";
    $search = array_search(33,$num);
    if(!empty($search))
        echo "El número buscado existe $search <br>";
    else    
        echo "No existe valor <br>";



        

?>