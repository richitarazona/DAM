<?php
include "cabecera.php";

//Utiliza la plantilla resultado.php

$nombre = $_POST['nombre'];
$aficiones = $_POST['aficiones'];
$resultado = "Tu nombre es $nombre<br/> Tu aficion es:".$aficiones;



include "resultado.php";
include "pie.php";
?>
