<?php
    include "cabecera.php";
        //utiliza la plantilla $resultado.php
        $nombre = $_POST['nombre'];
        $resultado = "Tus aficione son: ";
            if(iss($_POST['cine'])){
                $resultado .= $_POST['cine']."*";
            }if(isset($_POST['lectura'])){
                $resultado .= $_POST['lectura']."*";
             } if(isset($_POST['deporte'])){
                $resultado .= $_POST['deporte']."*";
             }if(isset($_POST['baile'])){
        $resultado .= $_POST['baile']."*";}
        echo "$nombre  $resultado";


    include 'utilidades.php';
    include "pie.php";
?>
