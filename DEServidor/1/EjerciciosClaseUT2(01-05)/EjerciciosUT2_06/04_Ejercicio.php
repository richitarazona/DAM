<?php
include "includes/funciones.php";
$resultado = "";
$articuloEncontrado = "";
$articulosConPrecioMayor = array(array());
$contador = 0;
$precioTotalCarrito = 0;

$carrito = array(array('id' => 1 , 'desc' => 'Diccionario Australiano', 'precio' => 24.95, 'unidades' => 2),array('id' => 2 , 'desc' => 'Building your own database', 'precio' => 100, 'unidades' => 4),array('id' => 3 , 'desc' => 'Simply JavaScript', 'precio' => 19.99, 'unidades' => 3),array('id' => 4 , 'desc' => 'Android programing', 'precio' => 39.95, 'unidades' => 1));

$resultado .= "<h2>Datos del carrito</h2>";
$resultado .= verArray2($carrito);
$resultado .= "<br><hr><br>";

foreach ($carrito as $articulos) {
    if ($articulos['id'] == 3) {
        $articuloEncontrado = $articulos;
    }
}
$resultado .= "<h2>Articulo con id 3</h2>";
$resultado .= verArray2($articuloEncontrado);
$resultado .= "<br><hr><br>";


foreach ($carrito as $articulos) {
    if ($articulos['precio'] > 25) {
        $articulosConPrecioMayor[$contador++] = $articulos;
    }
}
$resultado .= "<h2>Articulo con precio mayor a 25</h2>";
$resultado .= verArray2($articulosConPrecioMayor);
$resultado .= "<br><hr><br>";


foreach ($carrito as $articulos) {
   $precioTotalCarrito += $articulos['precio'] * $articulos['unidades'];
}


$resultado .= "<h2>Valor total del carrito: $precioTotalCarrito&#8364;</h2>";
$resultado .= "<br><hr><br>";

include "includes/resultado.php";

?>

