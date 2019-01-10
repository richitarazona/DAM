<?php
    include "cabecera.php";
    
    require_once 'utilidades.php';
    $nombre = $_POST['nombre'];
    $resultado = "Tus aficiones son :";
    if(isset($_POST['cine'])){
        $resultado .= $_POST['cine']."*";
    }
    if(isset($_POST['lectura'])){
        $resultado .= $_POST['lectura']."*";
    }
    if(isset($_POST['deporte'])){
        $resultado .= $_POST['deporte']."*";
    }
    if(isset($_POST['baile'])){
        $resultado .= $_POST['baile']."*";
    }
    echo "Hola $nombre, $resultado";
    
    
    
    
    
    include "pie.php";
?>
     
    
?>
