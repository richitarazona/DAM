<?php

include 'cabecera.php';
include 'funciones.php';


$personas = array(
    array('nombre' => '','apellidos' =>'Huici','mail' => 'pe.huice@gmail.com'),
    array('nombre' => 'Marta','apellidos' =>'Morales','mail' => 'ma.morales@gmail.com'),
    array('nombre' => 'Maria','apellidos' =>'Morsan','mail' => ''),
    array('nombre' => 'Javier','apellidos' =>'','mail' => 'ja.mena&gmail.com')
);





verArray($personas);



foreach ($personas as $persona) {
    $errores = validar($persona);
    if (empty($errores)) {
        echo 'Correcto';
        verArray($persona);
    }else{
        echo 'Incorrecto';
        verArray($errores);
    }
}








?>