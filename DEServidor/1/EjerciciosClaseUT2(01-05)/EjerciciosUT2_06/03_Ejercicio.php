<?php
include "includes/funciones.php";
$resultado = "";

$datosLibro = array('ISBN' => '124356-A' , 'Titulo' => 'El asedio', 'Autor' => 'Arturo Pérez Reverte', 'PRECIO' => 22.5);

$datosLibro2 = array('ISBN' => '122222-N' , 'Titulo' => 'La reina del sur', 'Autor' => 'Arturo Pérez Reverte', 'PRECIO' => 20);

$datosLibro3 = array('ISBN' => '1111116-P' , 'Titulo' => 'El maestro de esgrima', 'Autor' => 'Arturo Pérez Reverte', 'PRECIO' => 22.5);

$datosVariosLibros = array();
$datosVariosLibros[0] = $datosLibro;
$datosVariosLibros[1] = $datosLibro2;
$datosVariosLibros[2] = $datosLibro3;

$resultado .= "<h2>Datos de un libro</h2>";

foreach ($datosLibro as $libro => $dato) {
    $resultado .= "<h4>$libro - $dato</h4>";
}
$resultado .= "<hr><br>";
$resultado .= "<h2>Datos de varios libros</h2>";
$resultado .= verArray2($datosVariosLibros);

$resultado .= "<br><hr>";
foreach ($datosVariosLibros as $libros) {
    foreach ($libros as $libro => $dato) {
        $resultado .= "<h4>" . strtoupper($libro) . "- $dato</h4>";
    }
    $resultado .= "<hr>";
}








include "includes/resultado.php";

?>

