<?php 

    // Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable superglobal

    echo '<br>';
    if(isset($_COOKIE['micookie']))
        echo $_COOKIE['micookie'] . "<br>";
    else
        echo "No existe la cookies";


    if(isset($_COOKIE['unyear']))
        echo $_COOKIE['unyear'] . "<br>";
    else
        echo "No existe la cookies";

    echo "<br>";
?>  

<a href="18-crearCookies">Crear Cookiees</a>
<a href="18-borrarCookies">Borrar Cookiees</a>