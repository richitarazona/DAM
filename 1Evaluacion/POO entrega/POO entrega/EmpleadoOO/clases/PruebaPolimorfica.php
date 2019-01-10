<?php

class PruebaPolimorfica{

public static function Calcular(Empleado $emp){
    
    echo "Los ingresos del empleado: " .$emp->getPrimerNombre() . "  son de :" . $emp->ingresos()."<br>";
}

}


?>