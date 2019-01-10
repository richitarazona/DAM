<?php
    include "cabecera.php";

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    switch ($edad) {
        case 'uno':$ed = "entre 1 y 18";
         
            break;
            case 'dos':$ed = "entre 18 y 65";
            # code...
            break;
            case 'tres':$ed = "mas de 65";
            # code...
            break;
        
       
    }
    echo "Hola te llamas $nombre y tienes $ed";
    
     include "pie.php";
?>
