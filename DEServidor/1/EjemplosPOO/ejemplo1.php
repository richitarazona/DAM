<?php
// Definición de la clase
class MiClase1 {

	// Una propiedad pública
	public $pub;

	// Un método público
	function saludar() {
		// dentro de la clase nos referimos a sus
		// propiedades con la palabra $this
		echo  $this->pub;
	}

	function __construct($inicio="Iniciar") {
		// este método opcional se ejecuta automáticamente 
		// al crear un objeto de esta clase
		echo "__Construct: ¡Me están creando ahora $inicio!<br />";
	}

	
	function __destruct() {
		// este método opcional se ejecuta automáticamente 
		// al eliminarse el objeto
		echo "__Destructor: ¡Estoy a punto de desaparecer!<br />";
	}
}
include "vistas/cabecera.php";
echo "Definición de una clase <br />";

// se genera un ejemplar del objeto
$obj = new MiClase1();

// se modifica el valor de una propiedad
// desde fuera de la clase (se puede hacer porque
// la propiedad es pública NO REcomendable)

$obj->pub = "Hola, ¿cómo estamos?<br />";

// se llama a un método de la clase
$obj->saludar();

// al terminar la secuencia de comandos se destruye el objeto 
echo "Última sentencia del script. <br />";
include "vistas/pie.php"
?>
