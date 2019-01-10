<?php
include "includes/funciones.php";
$resultado = "";

$alumnos = array('Ana', 'Pedro', 'Luis', 'Esteban', 'Maite');
$resultado .= verArray2($alumnos). "<br><hr>";
$alumnos[] = "Isabel";
foreach ($alumnos as $alumno) {
    $resultado .= "<h4>$alumno </h4>";       
}
$resultado .= "<hr>";

$alumnos = array('Ana' => 5 , 'Pedro' => 4, 'Luis' => 7, 'Esteban' => 8, 'Maite' => 5, 'Isabel' => 4.5);

$resultado .= verArray2($alumnos). "<br><hr>";


$aprobados = 0;
$sumaNotas = 0;

foreach ($alumnos as $alumno => $nota) {
    $resultado .= "<h4>$alumno - $nota </h4>";
    if ($nota >= 5) {
        $aprobados ++;
    }
    $sumaNotas += $nota;
        
}


$resultado .= "<h4>Total aprobados: " . $aprobados . "</h4><br>";
$resultado .= "<h4>Nota media del curso: " . number_format($sumaNotas / count($alumnos), 2) . "</h4>";

$resultado .= "<br><hr>";

ksort($alumnos);
foreach ($alumnos as $alumno => $nota) {
    $resultado .= "<h4>$alumno - $nota </h4>";            
}
$resultado .= "<hr>";

asort($alumnos);
foreach ($alumnos as $alumno => $nota) {
    $resultado .= "<h4>$alumno - $nota </h4>";            
}



include "includes/resultado.php";

?>