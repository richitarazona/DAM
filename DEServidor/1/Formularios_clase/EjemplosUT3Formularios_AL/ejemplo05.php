<?php
include "cabecera.php";

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
echo "Hola te llamas $nombre y tienes $edad años";

 /*if(isset($_REQUEST['vivienda'])){
                $resultado2 .=$_REQUEST['vivienda']." ";
            }
            if(isset($_REQUEST['trabaja'])){
                $resultado2 .=$_REQUEST['trabaja']." ";
            }if(isset($_REQUEST['mus'])){
                $resultado2 .=$_REQUEST['mus']." ";
            }*/

include "pie.php";
?>
