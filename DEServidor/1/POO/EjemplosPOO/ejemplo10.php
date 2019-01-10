<?php

// Clase final, sirve para indicar que no puede ser derivada   
final class MiClaseFinal {
	public $saludo;
	
	function saludar() {
		print $this->saludo ."<br />";
	} 
	
}	
// Subclase o clase derivada

//Pero no se puede extender una clase definida como final
/* class MiSubClase extends MiClaseFinal {
	public $despedida;
	function despedirse() {
		print $this->despedida ."<br />";
	} */


include 'vistas/cabecera.php';
echo "Clase final <br />";
echo "Intento de creación un objeto de una clase derivada de una clase final ERROR";

// se intenta crear un objeto de clase MiSubClase
// una clase derivada de la clase final MiClase 
  
$obj = new MiSubClase();

$obj->saludo = "Hola, ¿Cómo estamos?<br />";
 
$obj->saludar();
include 'vistas/pie.php';

?>