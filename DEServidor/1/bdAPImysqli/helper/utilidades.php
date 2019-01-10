<?php
function obtenerRegistros($conexion,$sql)
{
  
    $resultado = mysqli_query($conexion,$sql);
    if(!$resultado){//ha ocurrido un error
        $error = "Ha habido un fallo en la consulta".mysqli_error($conexion);
        include "vistas/vista_error.php";
        exit();
    }
    
    $personas = array();
    while($fila = mysqli_fetch_array($resultado)){
    
        $personas[] = $fila;
    }
    
    return $personas;
    
    }


?>