<?php
    include "cabecera.php";

        //Utiliza la plantilla resultado.php
        $nombre = $_POST['nombre'];
        $resultado ="Tu nombre es: $nombre<br>Tu aficiones : {$_POST['aficiones']}";

    include 'resultado.php';
    include "pie.php";
?>
