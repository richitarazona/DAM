<?php

include 'cabecera.php';
include 'funciones.php';

$personas = array(
    array('nombre' => '','apellidos' =>'Huici','edad' =>  13),
    array('nombre' => 'Marta','apellidos' =>'Morales','edad' => 45),
    array('nombre' => 'Maria','apellidos' =>'Morsan','edad' => 42),
    array('nombre' => 'Javier','apellidos' =>'','edad' =>  "")
);


$reglas = array(
    'nombre' => array('required' => true),
    'apellidos' => array('required' => true),
    'edad' => array( 'min' => 18, 'max' => 60,'required' => true)
);

verArray($personas);
verArray($reglas);

foreach ($personas as $persona) {
    $errores = validar2($persona, $reglas);
    if (empty($errores)) {
        echo 'Correcto';
        verArray($persona);
    }else{
        echo 'Incorrecto';
        verArray($errores);
    }
}

