<?php
include "cabecera.php";

//este script procesa la peticion
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
echo "Hola te llamas $nombre y tienes $edad años";

include "pie.php";
?>
