<?php
// Clase
class Clase6 {

    public $saludo;

    function __construct() {
        echo "Se está ejecutando el constructor en la clase " .
        " MiClase base<br />";
    }

    function __destruct() {
        echo "Se está destruyendo un objeto de la clase " .
        " MiClase base<br />";
    }

    function saludar() {
        echo $this->saludo;
    }

}

// Subclase o clase derivada
class MiSubClase extends Clase6 {

    public $despedida;

    function __construct() {
        echo "Se está ejecutando el constructor de un objeto de la subclase MiSubClase<br />";
        // Se fuerza la llamada al constructor de la clase base
        parent::__construct();
    }

    function __destruct() {
        echo "Se está destruyendo un objeto de la clase MiSubClase<br />";
    }

    function despedirse() {
        echo $this->despedida . "<br />";
    }

}
