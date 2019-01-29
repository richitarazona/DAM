<?php
include "cabecera.php";

//utiliza la plantilla resultado.php
    $nombre = $_POST['nombre'];
    $resultado = "";
    $aficiones = $_POST['aficiones'];
        foreach ($aficiones as $aficion) {
        # code...
        $af .= $aficion."*";}

    $resultado .= "Hola $nombre, tus aficiones son: $af";
    
include "pie.php";
?>
