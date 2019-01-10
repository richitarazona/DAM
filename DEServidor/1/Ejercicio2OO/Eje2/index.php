
<?php
include 'vistas/cabecera.php';
include 'clases/NsDanza.php';

use NsDanza\Actividad ;
use NsDanza\Baile;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


<?php

$act = new Actividad("actividad","Baile fin de curso","Meson Navarreria","12-12-2012");
$bai = new Baile("actividad","Baile fin de curso","Meson Navarreria","12-12-2012","Richi","12h-18h");



$act->mostrar();
$bai->mostrar();

$act2->setId("Concurso");
$act2->setdescripcion("Navidad");
$act2->setFecha("13/12/2019");
$act2->setlugar("Concurso");
$bai2->setProfesor("Juan");
$bai->setclaseHora("16h-18h");

$act2->mostrar();
$bai2->mostrar();


include 'vistas/pie.php';
?>
</body>
</html>