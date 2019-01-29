<?php
    include "cabecera.php";
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
            switch ($edad) {
                case "uno": $ed = "Edad entre 1 y 18";
                    break;
                case "dos": $ed ="Edad entre 18 y 65";
                    break;
                case "tres": $ed ="Mas de 65";
                    break;
        }
        echo "$nombre tienes una $ed ";

     include "pie.php";
?>
