<?php

include 'clases/Empleado.php';
include 'clases/EmpleadoAsalariado.php';
include 'clases/EmpleadoPorComision.php';
include 'clases/PruebaPolimorfica.php';
include 'clases/Empresa.php';




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">

    <title>Document</title>
</head>
<body>
<?php
include 'includes/cabecera.php';

/* $emp1 = new Empleado('Ricardo', 'Moron', '12345');
$emp2 = new Empleado('Javier', 'Mena', '98765');
$emp3 = new Empleado('Iñigo', 'Lezaun', '65748');

$emp1->mostrar();
$emp2->mostrar();
$emp2->setApellido('Luzuriaga');
$emp2->mostrar();
$emp3->mostrar();
$emp3->setNumSS('652*9');
$emp3->mostrar(); */

$empAsa1 = new EmpleadoAsalariado('Txus', 'Bigotes', '57313',12,34);
$empAsa1->mostrar();
$empAsa1->ingresos();
$empAsa1->setApellido('Coletas');
$empAsa1->sethorasTrabajadas(43);
$empAsa1->mostrar();
$empAsa1->ingresos();

$empCom1 = new EmpleadoPorComision('Amaiur','Tikito','5669',26,76);

$empCom1->mostrar();
$empCom1->setVentasBrutas(45);
$empCom1->ingresos();
$empCom1->settarifaComision(677);
$empCom1->mostrar();
$empCom1->ingresos();


$pruebaPol = new PruebaPolimorfica();
$pruebaPol->calcular($empCom1);//----------------------------
$pruebaPol::calcular($empCom1); //----------------------------


$empresa = new Empresa();
$empresa->addEmpleado($empCom1);
$empresa->addEmpleado($empAsa1);
$empresa->listarEmpleados();
$empresa->EmpleadoMasIngresos();
$empresa->listarIngresos();
$empresa->eliminarEmpleado($empAsa1);
$empresa->listarEmpleados();
$empresa->addEmpleado($empAsa1);
$empresa->listarEmpleados();
 

 




include 'includes/pie.php';
?>
</body>
</html>

