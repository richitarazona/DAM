<?php

// Definición de la clase Prueba
class Prueba {

    private $matriz;

    // en el constructor se crea la matriz con un único elemento
    function __construct() {
        $this->matriz = array("Italia" => 100);
    }

    // cuando se accede a una propiedad que no existe, actúa
    // el método __get(), en el argumento se recibe el nombre de la
    // supuesta propiedad
    // aquí implementamos el método para que reciba los valores de
    // claves de una matriz asociativa
    // Éste es sólo un ejemplo para la aplicación de métodos __get()
    // y __set()

    function __get($nv) {
        echo "<br />Método get: " . $nv . "<br />";

        // Elmétodo isset() verifica si la variable está asignada
        if (isset($this->matriz[$nv])) {
            return $this->matriz[$nv];
        } else {
            return " NO está asignada";
        }
    }
    // cuando se asigna un valor a una propiedad que no existe,
    // actúa el método __set(), en el argumento se recibe el 
    // nombre de la supuesta propiedad y el valor que se quiere 
    // asignar

    function __set($nv, $val) {
        echo "<br />Método set: " . $nv . ", " . $val . "<br />";
        $this->matriz[$nv] = $val;
    }

    // ejemplo de _isset()
    function __isset($nv) {
        echo "<br />Método _isset: " . $nv . "<br />";
        return isset($this->matriz[$nv]);
    }

    // ejemplo de _unset()
    function __unset($nv) {
        echo "<br />Método _unset: " . $nv . "<br />";
        unset($this->matriz[$nv]);
    }

}

include 'vistas/cabecera.php';
echo "Simulación de sobrecarga de acceso a propiedades /<br /><br /><br />";

// al generar el ejemplar de la clase Prueba
// se ejecuta autom�ticamente el constructor de la clase
// __construct() 

$objPrueba = new Prueba;

// la matriz solo tiene el elemento de clave Italia, por lo que
// España no existe
if (!$objPrueba->España) {
    echo "el elemento no existe en la matriz.<br /> ";
}

// si intentamos obtener el valor de la pseudopropiedad España
// obtenemos False, porque aún no le asignamos valor

$b = $objPrueba->España;
echo "Retorno es:" . $b . "<br />";

// Ahora se asigna el valor a la pseudo propiedad Espa�a,
// gracias a la implementación del método __set(), el valor
// se almacena en la propiedad matriz, en la clave Espa�a

$objPrueba->España = 150;

// Al acceder ahora a la pseudo propiedad, obtenemos el valor
// desde el método __get()

$b = $objPrueba->España;
echo "Retorno es :" . $b . "<br />";

if ($objPrueba->España) {
    echo "El elemento existe en la matriz.<br /> ";
}

// creamos otro elemento
$objPrueba->Argentina = 200;

// se usa la funci�n isset() con una propiedad no existente
// esperando que la funci�n _isset() haga su trabajo
if (isset($objPrueba->Argentina)) {
    echo "El elemento está en la matriz.<br /> ";
}

unset($objPrueba->Argentina);

include 'vistas/pie.php';
?>