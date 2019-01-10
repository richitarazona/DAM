<?php

    //CONECTAMOS CON EL SERVIDOR
    include 'config/config.php';

    $conexion = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
    if(!$conexion){
        $errror = "Imposible hacer la conexion con el servidor";
        include 'vistas/vista_error';
        exit();
    }
    //SELECCIONAMOS LA BASE DE DATOS
    $resul = mysqli_select_db($conexion,DB_NAME);
    if(!$resul){
        $errror = "Imposible localizar la base de datos".DB_NAME;
        include "vistas/vista_error.php";
        exit();

    }

    //COMPROBACION DE QUE SE HA REALIZADO LA CONEXION
    //echo "La conexion de ha realizado con exito";





?>