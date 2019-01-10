<?php

// La clase que implemente la interfaz Imprimir deberá forzosamente
// implementar la función imprimir
include 'clases/Persona.php';
include 'vistas/cabecera.php';
// Se crea un objeto Empleado
$emp = new Empleado("Contabilidad", "44423899", "José Pérez");

// se usa el método de la clase Empleado
$emp->imprimir();

// el objeto $emp es de tipo Empleado, Persona e Imprimir

if ($emp instanceof Empleado) {
    echo "El objeto \$emp es de tipo Empleado.<br />";
}

if ($emp instanceof Persona) {
    echo "pero también es de tipo Persona (por derivar de " .
            "esta clase).<br />";
}

if ($emp instanceof Imprimir) {
    echo "Y también es de tipo Imprimir (por implementar " .
            "esta interfaz).<br />";
}
include 'vistas/pie.php';
?>