<!-- //ES UN FICHERITO QUE SE ALMACENA EN EL ORDENADOR DEL USUARIO QUE VISITA LA WEB  -->
<!-- CON EL FIN DE RECORDAR DATOS O RASTREAR EL COMPORTAMIENTO DEL MISMO EN LA WEB -->

<?php 

    // setcookie("nombre","valor solo texto","caducidad", "ruta", "dominio" );
    
    // cookies básica
    setcookie("micookie","Valor de mi galleta");
    setcookie("unyear","Valor de mi cookies de 365 días", time()+(60*60*24*365));

    header("location:18-verCookies.php");

?>

<!-- <a href="18-vercookies.php">Ver las galletas</a> -->