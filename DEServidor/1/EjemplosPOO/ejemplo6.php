<?php
include 'clases/Clase6.php';
include 'vistas/cabecera.php';
echo "Acceso a la clase base desde la clase derivada <br />";
// se crea un objeto de clase MiSubClase
// al ser una clase derivada de MiClase, la clase MiSubClase
// posee todos los métodos y las propiedades de su clase base MiClase y
// además los métodos y propiedades propios
$obj = new MiSubClase();
// Podemos comprobar que  se produce una llamada forzada 
// al constructor de la clase base
// El objeto $obj es de clase MiSubClase pero igualmente
// puedo utilizarlo para hacer referencia a la propiedad
// saludo y al método saludar que son de su clase base
$obj->saludo = "Hola, ¿Cómo estamos?<br />";
$obj->saludar();

// El objeto $obj es de clase MiSubClase por lo que
// puedo utilizar sus propiedades y métodos (despedida y despedir)
$obj->despedida = "Adiós<br />";
$obj->despedirse();
include 'vistas/pie.php';
?>


