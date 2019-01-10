<?php
 
    require_once 'utilidades.php';
    //verArray($_POST);
    $nombre = $_POST['nombre'];
    $resultado = "";
    $af = "*";
    $aficiones = $_POST['aficiones'];
    foreach ($aficiones as $aficion) {
        $af .= $aficion;
        # code...
    }

    $resultado = "Hola $nombre, tua aficiones son: $af";

    include 'resultado.php';
    
    
?>
