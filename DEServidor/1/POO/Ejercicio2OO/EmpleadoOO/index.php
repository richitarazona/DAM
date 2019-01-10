<?php

include 'vistas/cabecera.php';
include 'clases/Empleado.php';
 include 'clases/EmpleadoAsalariado.php';

include 'clases/EmpleadoPorComision.php';
 /*include 'clases/Empresa.php';
include 'clases/Poliformismo.php'; */


/* $emp1 = new Empleado("Ricardo","Moron","56437");
$emp1->mostrar();

$emp2 = new Empleado("Javi","Mena","3545");
$emp2->mostrar(); */

$empAsa1 = new EmpleadoAsalariado("Ricardo","Moron","56437","97","67");
$empAsa1->mostrar();

$empAsa1->setHorasTrabajadas("20");
$empAsa1->setPrecioHoras("99");
$empAsa1->mostrar();
$empAsa1->ingresos();

$empCom1 = new EmpleadoPorComision("Ricardo","Moron","56437","97","67");
$empCom1->mostrar();
$empCom1->ingresos();

$restaurante = new Empresa();
$restaurante->addEmpleado($empasa1);
$restaurante->listarEmpleados();

include 'vistas/pie.php';
?>