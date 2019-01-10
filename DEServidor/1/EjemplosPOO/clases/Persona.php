<?php

// Definición de la clase Persona
class Persona implements Imprimir {

    // Identificación de la persona
    public $dni;
    public $nombre;

    function __construct($var_dni, $var_nombre) {
        $this->dni = $var_dni;
        $this->nombre = $var_nombre;
    }
    function imprimir() {
        echo "Persona: " . ($this->nombre) . "<br /><br />";
    }

}

// la clase empleado extiende la clase persona e implementa 
// la interfaz Imprimir
Interface Imprimir {

    function imprimir();
}

class Empleado extends Persona implements Imprimir {

    //   
    public $departamento;

    function __construct($var_departamento, $var_dni, $var_nombre) {
        $this->departamento = $var_departamento;
        parent::__construct($var_dni, $var_nombre);
    }

    // este método se debe implementar obligatoriamente
    // porque la clase Empleado implementa la interfaz Imprimir

    function imprimir() {
        echo "Empleado: " . ($this->nombre) . "<br /><br />";
    }

}
