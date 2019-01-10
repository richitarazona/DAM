<?php
include 'clases/Empleado.php';


class PruebaPolimorfica {
    
static function Calcular (Empleado $emp) {
    return $emp->ingresos(); }//poliformismo
   
}

?>