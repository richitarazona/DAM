<?php

include 'vistas/cabecera.php';
include 'clases/Empleado.php';

/* include 'clases/empleadoAsalariado.php'; */




/* $emp1= new Empleado("Ricardo", "Moron", "345");
$emp2= new Empleado("Alberto", "Ramirez", "765"); 

$emp1->mostrar();
$emp2->mostrar();   */

 $empAsa1=new EmpleadoAsalariado(); 

$empAsa1->setPrecioHoras("12");
$empAsa1->setHorasTrabajadas("12"); 


 $empAsa1->mostrar(); 



/* $empAs1=new EmpleadoAsalariado("Ricardo", "Moron", "345","13", "32");
$empAs1->mostrar(); */

include 'vistas/pie.php';

?>