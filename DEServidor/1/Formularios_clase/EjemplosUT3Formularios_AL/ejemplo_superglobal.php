<?php

    include "cabecera.php";
    
    foreach($_SERVER as $key =>$valor)
{

    echo "<p>$key-$valor</p>";
}
    include "pie.php";
    
?>
