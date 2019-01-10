<?php
include "cabecera.php";

verArray($_POST);
$nombre = $_POST['nombre'];
$texto = $_POST['texto'];
echo "Hola te llamas $nombre y tu comentario es $texto";


include "pie.php";
?>
