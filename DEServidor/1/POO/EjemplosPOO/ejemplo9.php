<?php
include 'clases/Clase89.php';
include 'vistas/cabecera.php';
echo "<Métodos abstractos  <br />";

$obj = new MiSubClase();

// se utiliza el método en la clase derivada que provee
// la implementación de un método abstracto de la clase base

$obj->saludar();
unset($obj);  //destruir un objeto
echo "<br /><br /><br />";
//asignando valor a la propiedad saludo de la clase base
$obj =new MiSubClase;
$obj->setSaludo("Cambiando el valor de la propiedad saludo<br />");
$obj->saludar();
$nombre="Begoña";
$obj->presentar($nombre);



//Si se intenta instanciar una clase Clase89 no se puede, ni da opción NetBeans
//$obj2 = new Clase89();//ERROR
include 'vistas/pie.php';
?>