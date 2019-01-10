<?php

// El modo de hacerlo sin __autoload() es con include:
//include "Personas.php";

function __autoload($varClase) {

    // con esteechoveremos cuántas veces se invoca al
    // método autoload()
    // Será sólo una vez, porque el archivo Personas.php contiene la
    // declaración de las dos clases del programa
    //CONSULTAR también la función spl_autoload_register 
    //http://whybugs.blogspot.com.es/2013/02/autoloader-unico-en-php-usando.html
    echo"<br />** Entró al método __autoload()**<br /><br />";

    // la lógica dentro de la función __autoload() es libre
    // lo habitual es incluir la definición de la clase faltante

    if ($varClase == "Empleado" or $varClase == "Persona") {
        include "clases/Persona.php";
    } else {
        include $varClase . ".php";
    }
}
include 'vistas/cabecera.php';
echo "Ejemplo del método mágico __autoload() <br /><br />";
// la clase Persona no está declarada dentro de la 
// secuencia de comandos vigente en lugar de producirse un error, 
// el método __autoload lo intercepta
// y se ejecuta. El parámetro que recibe el método es el nombre 
// de la clase que no está definida en el script

$obj = new Persona(122, "José Pérez");
$obj->imprimir();
// como la clase Empleado está definida dentro del archivo 
// Personas.php cuando se hace referencia a la clase Empleado, 
// PHP detecta que la clase ya 
// está definida, ya que se cargó junto con la clase Persona

$obj = new Empleado("Recursos humanos", 99123, "Juan Fernández");
$obj->imprimir();
include 'vistas/pie.php';
?>