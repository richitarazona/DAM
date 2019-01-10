<?php
include 'vistas/cabecera.php';
include 'clases/MiNamespace.php';

use Espacionom\Carrera as nuevo;  //se le puede poner alias a un espacio de nombres
$obj2=new nuevo("Txantrea","Txantrea Herri Krosa","16-12-2017");

$obj2->apuntarse();
include 'vistas/pie.php';



