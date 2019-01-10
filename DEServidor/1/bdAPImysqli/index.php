<?php
require_once 'modelo/conexion.php';
include "helper/utilidades.php";
//error_reporting(0);

if(isset($_GET['opcion']) &&  $_GET['opcion'] == 'listar'){

   $sql=  $sql = "SELECT * FROM personas";
   $personas =array();
   $personas= obtenerRegistros($conexion,$sql);

   include "vistas/vista_listar.php";
    exit();
    
}

    $sql = 'SELECT nombre,apellido FROM personas';
    $personas =array();
    $personas= obtenerRegistros($conexion,$sql);
    
    include "vistas/vista_inicio.php";
    

       
?>