<?php

    include "cabecera.php";
    
    //mostrar $_SERVER
    foreach ($_SERVER as $key => $value) {
        # code...
        echo "<p>$key - $value</p>";
    }

    include "pie.php";
    
?>
