<?php 



//VARIABLES LOCALES: SON LAS QUE SE DEFINEN DENTRO DE UNA FUNCIÓN Y NO PUEDEN SER USADAS FUERA DE LA FUNCIÓN
//SOLO ESTAB DISPONIBLES DENTRO. A NO SER QUE HAGAMOS UN RETURN

// VARIABLE GLOBALES: SON LAS QUE SE DECLARAN FUERA DE UNA FUNCIÓN Y ESTAN DISPONIBLES DENTRO DE LAS FUNCIONES
echo "<br>";

$frase= "Ni los genios son tan genios ni los mediocres son tan mediocres";
// echo "$frase <br>";

function holaMundo(){
    global $frase;
    echo "$frase <br>";

    $year = 2020;
    echo "$year <br>";

    return $year;
}




echo holaMundo();    


?>