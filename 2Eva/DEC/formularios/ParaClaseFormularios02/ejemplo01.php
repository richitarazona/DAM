<?php

    
    require_once 'utilidades.php';
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        switch ($edad) {
            case 'uno':
                $edad = "Entre 1 y 18";
                break;
            case 'dos':
                $edad = "Entre 18 y 65";
                break;
            case 'tres':
                $edad = "Mas de 65";
                break;
          
        }
    
     $resultado = "Tu nombtre es : $nombre y tu edad es : $edad";
    
    include 'resultado.php';  
?>
