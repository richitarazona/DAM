<?php

// Clase
class MiClase4 {

    private $saludo;

    function getSaludo() {
        return $this->saludo;
    }

    function setSaludo($saludo) {
        $this->saludo = $saludo;
    }

    function __construct() {
        echo "Se está ejecutando el constructor en la clase " .
        " MiClase<br />";
    }

    function __destruct() {
        echo "Se está destruyendo un objeto de la clase " .
        " MiClase<br />";
    }

    function saludar() {
        echo $this->saludo;
    }

}

// Subclase o clase derivada
class MiSubClase extends MiClase4 {

    private $despedida;

    function getDespedida() {
        return $this->despedida;
    }

    function setDespedida($despedida) {
        $this->despedida = $despedida;
    }

    function __construct() {
        echo "Se está ejecutando el constructor de un objeto " .
        "de la subclase MiSubClase<br />";
    }

    function __destruct() {
        echo "Se está destruyendo un objeto de la clase " .
        " MiSubClase<br />";
    }

    function despedirse() {
        echo $this->despedida . "<br />";
    }

}

include 'vistas/cabecera.php';
echo "Primer ejemplo de Herencia<br /><br />";

// se crea un objeto de clase MiSubClase
// al ser una clase derivada de MiClase, la clase MiSubClase
// posee todos los métodos y las propiedades de su clase base 
// MiClase4 y además los métodos y propiedades propios

$obj = new MiSubClase();

// Podemos comprobar que no se produce una llamada automática 
// al constructor de la clase base

// El objeto $obj es de clase MiSubClase pero igualmente
// puedo utilizarlo para hacer referencia a la propiedad
// saludo y al método saludar que son de su clase base
$saludo = "Hola, ¿cómo estamos?<br />";
$obj->setSaludo($saludo);
$obj->saludar();

// El objeto $obj es de clase MiSubClase por lo que
// puedo utilizar sus propiedades y métodos (despedida y despedir)
$despedida = "Adiós<br />";
$obj->setDespedida($despedida);
$obj->despedirse();

echo "Segundo ejemplo<br /><br />";

// se crea un objeto de clase MiClase4
$obj2 = new MiClase4();

// El objeto $obj2 no posee los métodos y propiedades
// de su clase hija (Esta es la comprobación)
// esto produce un error  fatal 

$saludo = "Final del ejemplo<br />";
$obj2->setSaludo($saludo);

echo $obj2->getSaludo();
echo $obj2->saludar();
$obj2->despedirse();  //ERROR
include 'vistas/pie.php';
?>
 