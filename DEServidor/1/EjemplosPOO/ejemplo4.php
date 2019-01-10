<?php

// Clase
class MiClase3 {
     const IVA = 21;
}


include'vistas/cabecera.php';
$a="MiClase3";
echo $a::IVA;
include 'vistas/pie.php';
?>