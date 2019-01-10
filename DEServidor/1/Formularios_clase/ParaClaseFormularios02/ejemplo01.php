<?php

    include "cabecera.php";
    require_once 'utilidades.php';
   
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
  
    
   
    switch ($edad) {
        case 'uno':$ed = "entre 1 y 18";
            
            break;
            case 'dos':$ed = "entre 18 y 65";
            
            break;
            case 'tres':$ed = "Mayor de 65";
            
            break;
        
        
    }
     
    echo "Te llamas $nombre y tu edad  es: $ed años";
    include "pie.php";
?>
