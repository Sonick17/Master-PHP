<?php 


//FUNCION ES UN CONJUNTO DE INSTRUCCIONES AGRUPADA BAJO UN NOMBRE CONCRETO Y QUE PUEDEN REUTILIZATSE SOLAMENTE A LA FUNCION 
//TANTAS VECES COMO QUERAMOS.

// function muestraNombre()
// {
//     echo "Alex <br>";
//     echo "Brenda <br>";
//     echo "Luis <br>";
//     echo "Noel <br>";
//     echo "<hr>";
// }

// muestraNombre();

echo "<br>";
// function tabla($num)
// {
//     echo "<br> La tabla de multiplicar $num <br>";
//     for($i = 0; $i <= 12; $i++)
//     {
//         $ope = ($i * $num);
//         echo "$i x $num = $ope <br>";
//     }
// }

// for($i=1; $i <= 10; $i++)
// {
//     tabla($i);
// }

function calcular($num, $num2, $cond = false)
{
    $cadenaTexto = "";
    $suma = $num + $num2;
    $resta= $num - $num2;
    $multi= $num * $num2;
    $divi= $num /  $num2 ;

    if($cond)
        $cadenaTexto.= "<h1>";

    $cadenaTexto.= "suma $num + $num2 =    $suma  <br>";
    $cadenaTexto.= "Resta $num - $num2 =   $resta <br>";
    $cadenaTexto.= "Multi $num x $num2 =   $multi <br>";
    $cadenaTexto.= "División $num / $num2 =$divi  <br>";
    
    if($cond)
        $cadenaTexto.= "</h1>";

    return $cadenaTexto;
    
}

echo calcular(4,6);
echo calcular(4,6,true);






?>