<?php
include 'clases/Factura.php';
include 'vistas/cabecera.php';
// Se crea un objeto Factura
$fac = new Factura("21001", "20/04/2004");

// se crea un objeto linea de detalle
$lin = new Linea_Detalle(6, "peras");

//antes de llamar a un método se PUEDE comprobar que el objeto 
//es del tipo adecuado, en este caso de tipo Linea_Detalle.
//En estecaso no haría falta, pero si no se sabe 
//si es así se agrega la línea a la factura
if ($lin instanceof Linea_Detalle) {
    $fac->agregar_linea($lin);  
}
//Otra vez, envía un objeto Linea_Detalle
// se crea otra linea de detalle, 
// Como es correcto, se puede no comprobar
$lin = new Linea_Detalle(12, "manzanas");
$fac->agregar_linea($lin); 

// obtención de todas las lineas de factura
//$linea no está definida como un objeto Linea_Detalle
//y Netbeans no ofrece getCantidad(), pero lo reconoce.
echo "<u><b>contenido de las lineas de detalle </u></b><br />";
foreach (($fac->getLineas()) as $linea) {
    echo ("cantidad: " . $linea->getCantidad(). " unidades -  " .  //$linea no está definida como un objeto Linea_Detalle
    " producto: " . $linea->getProducto() . "<br />");
}

include 'vistas/pie.php';
?>