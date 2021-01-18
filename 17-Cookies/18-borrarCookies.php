<?php 

    if(isset($_COOKIE['unyear']))
        setcookie('unyear','',time()-1000);
    
    header('location:18-verCookies.php');

?>