<?php
include 'clases/Clase89.php';
include 'vistas/cabecera.php';
echo "Clases abstractas<br /><br />";

// Clase abstracta 
// sirve para ser derivada pero no se pueden
// crear ejemplares de esta clase

// se crea un objeto de clase MiSubClase
// al ser una clase derivada de la clase abstracta MiClase    
$obj = new MiSubClase();

$obj->setSaludo("Hola, ¿Cómo estamos?<br />");
$obj->saludar();

// Pero, ¿Qué pasa si intento generar un objeto de la clase
// MiClase que es abstracta? 

echo "<br />Intento de generar un ejemplar de una clase abstracta...<br />";
//$obj2 = new MiClase();
include 'vistas/pie.php';
?>
