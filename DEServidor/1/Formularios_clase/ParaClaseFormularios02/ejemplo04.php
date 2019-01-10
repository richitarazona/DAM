<?php
     
    include "cabecera.php" ;
    require_once 'utilidades.php';
    //verArray($_POST);
    $nombre = $_POST['nombre'];
    $aficiones = $_POST['aficiones'];
    $af = "Aficiones: ";
    foreach ($aficiones as $aficion ) {

        $af .=$aficion." ";
        # code...
    }

    $resultado = "Tu nombre es $nombre y tus aficiones $af";
    echo $resultado;

    
    include "pie.php";
?>
