<?php 

    // echo "<br>";
    // $contenido = [];
    // for($i= 0; $i< 120; $i++)
    // {
    //     array_push($contenido,$i);   
    // }

    // for($i= 0; $i< count($contenido); $i++)
    // {
    //     echo $i. "<br>";   
    // }

    // $coleccion = ["Luis","Freddy","Minato","Kakashi"];
    // $busquedad= array_search("Alex",$coleccion);
    // echo "<br>";
    // if(!empty($busquedad))
    //     echo strtoupper("No esta vacia") . "<br>";
    // else    
    //     echo strtolower("esta vacia") . "<br>";

    echo "<br>";

    // $colecion = [
    //     "Nombre" => "Alex",
    //     "Edad" => 26,
    //     "logico" => true
    // ];

    // $nom = "Alex";

    // if( is_string($nom) )
    //     echo "Es una cadena <br>";

    $coleccion = 
    [
        "Accion" => ['MiniCraf','StarCraf II','FinalFantasy'],
        "Aventura" => ['Call of duty','Gunz of boom','Pokemon go'],
        "Deporte" => ['Pes2019','Fifa 2020','Counter']
    ];

    // $cabecera = array_keys($coleccion); 
    //CABECERA DE LA TABLA
    echo '<table border= "1">';

        echo "<tr>";
            foreach($coleccion as $i => $clc)
            {
                echo "<th>";
                    echo $i;
                echo "<th>";
            }
        echo "</tr>";
    //CONTENIDO
        foreach($coleccion as $i => $clc)
        {
            echo "<tr>";
            
                foreach($clc as $items)
                {
                    echo "<td>";
                        echo $items;
                    echo "<td>";
                }
            echo "</tr>";
        }
    echo '</table>';


        



?>