<?php 
// SESSION ALMACENA Y PERSISTE DATOS DEL USUARIO MIENTRAS NAVEGA EN UN SITIO WEB HASTA QUE CIERRE LA SESSION O CIERRE EL NAVEGADOR

//INICIAR SESSION
    session_start();
    
    // VARIABLE LOCAL
    $var = "Soy una cadena de texto";

    // VARIABLE DE SESSION
    $_SESSION['var_session'] = "Session Activa";

    echo $var ."<br>";
    echo $_SESSION['var_session'] ."<br>";


?>