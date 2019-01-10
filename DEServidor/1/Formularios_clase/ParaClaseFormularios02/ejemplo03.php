<?php
    include "cabecera.php";
    require_once 'utilidades.php';
    //verArray($_POST);

    $nombre = $_POST['nombre'];
    $resultado = "Tu nombre es $nombre y tu aficion es: {$_POST['aficiones']}";
    
    include "resultado.php";
    include "pie.php"
?>
