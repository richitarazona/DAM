<?php

// Clase con un método final 
// sirve para indicar que no puede ser reemplazado 

class MiClaseMetodoFinal {

    public $saludo;

    final function saludar() {
        echo $this->saludo . "<br />";
    }

}

// Subclase o clase derivada
//Pero no se puede implementar un método definido como final

class MiSubClase extends MiClaseMetodoFinal {

    public $despedida;

    // la definición de este método produce un error fatal
    function saludar() {
        echo $this->saludo . "<br />";
    }

    function despedirse() {
        echo $this->despedida . "<br />";
    }

}

// se crea un objeto de clase MiSubClase
// una clase derivada de la clase MiClase
// la que tiene un método final  
echo "Método final<br />";

$obj = new MiSubClase();

$obj->saludo = "Hola, ¿Cómo estamos?<br /><br />";

$obj->saludar();
?>
