<?php

$cadena = "asd123";
$patron2 = "/^[a-zA-Z ]+$/i";

if (preg_match($patron2, $cadena)) {
    print "<p>La cadena $cadena son sólo letras minúsculas o mayúsculas.</p>\n";
} else {
    print "<p>La cadena $cadena no son sólo letras minúsculas o mayúsculas tambien número.</p>\n";
}

?>
