<?php

abstract class Clase89 {

    private $saludo;

    function __construct() {
        echo "Se está ejecutando el constructor en la " .
        "clase MiClase<br />";
    }

    function __destruct() {
        echo "Se está destruyendo un objeto de la clase " .
        " MiClase<br />";
    }

    function getSaludo() {
        return $this->saludo;
    }

    function setSaludo($saludo) {
        $this->saludo = $saludo;
    }

    function saludar() {
        echo $this->saludo;
    }

    abstract function presentar($nombre);
}

// Subclase o clase derivada
class MiSubClase extends Clase89 {

    private $despedida;

    function __construct() {
        echo "Se está ejecutando el constructor de un objeto " .
        " de la subclase MiSubClase<br />";
    }

    function __destruct() {
        echo "Se está destruyendo un objeto de la clase " .
        " MiSubClase<br />";
    }

    function getDespedida() {
        return $this->despedida;
    }

    function setDespedida($despedida) {
        $this->despedida = $despedida;
    }

    function despedirse() {
        echo $this->despedida . "<br />";
    }
    function presentar($nombre) {
        echo "Hola soy $nombre <br />";
    }

}
