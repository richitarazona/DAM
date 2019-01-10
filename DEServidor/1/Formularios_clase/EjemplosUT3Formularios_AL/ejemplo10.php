<?php
include "cabecera.php";
//utiliza la plantilla $resultado.php



$nombre = $_POST['nombre'];
$resultado = "";
$resultado = "Tu nombre es $nombre <br/>";

if(!isset($_POST['aficiones'])){
    
    echo "Tu nombre es $nombre y no has seleccionado nada";

}else
{
    $resultado = "Tu nombre es $nombre <br/>"
 $aficiones = $_POST['aficiones'];
 $resultado = "Tus aficiones son:";
 foreach ($aficiones as $aficion) { 

    //concatenamos los resultados
    $resultado .= $aficion."*";
     # code...
 }
 

}


include "resultado.php";
include "pie.php";
?>
