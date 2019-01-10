<?php
include "cabecera.php";

//utiliza la plantilla resultado.php

$nombre = $_POST['nombre'];
$aficiones = $_POST['aficiones'];
$af = "Aficiones:";
foreach ($aficiones as $aficion ) {

    $af .=$aficion." ";
    # code...
}

$resultado = "Tu nombre es $nombre <br/>Tus aficiones son $af";

include "resultado.php";
include "pie.php";
?>
