<?php
include "includes/funciones.php";
$resultado = "";
$articuloEncontrado = "";
$result = array(array());
$contador = 0;
$precioTotalCarrito = 0;

$carrito = array(array('id' => 1 , 'desc' => 'Diccionario Australiano', 'precio' => 24.95, 'unidades' => 2),array('id' => 2 , 'desc' => 'Building your own database', 'precio' => 100, 'unidades' => 4),array('id' => 3 , 'desc' => 'Simply JavaScript', 'precio' => 19.99, 'unidades' => 3),array('id' => 4 , 'desc' => 'Android programing', 'precio' => 39.95, 'unidades' => 1));

foreach ($carrito as $productos) {
    if ($productos['precio'] < 25) {        
        $resultado .= "<div class='articulo'><h4>" . $productos['desc'] . "-" . $productos['precio'] . "</h4></div>";    
    $resultado .= "<hr>";
    }
    
}
$resultado .= "<h2>Articulo con precio menor a 25</h2>";
$resultado .= verArray2($resultado);
$resultado .= "<br><hr><br>";


include "includes/resultado.php";

?>

