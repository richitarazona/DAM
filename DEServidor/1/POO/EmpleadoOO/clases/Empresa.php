<?php
class Empresa {

    private $empleados;
    private $ingresos = 0;
    private $mayorIngresos = 0;

    function __construct(){
        $this->empleados = array();
    }

    function addEmpleado($empleado){
        $this->empleados[] = $empleado;
    }
    

    function listarEmpleados(){
        foreach ($emplados as $empleado => $value) {
            echo "EMPLEADO: " . $empleado->mostrar()  ;   
    }}   

    function Ingresos(){
        foreach ($emplados as $empleado => $value) {
    echo "Los ingresos de: " . ($this->empleado) . " son:" . $this->empleado->ingresos();

        }{
       
        }
    }
    function empleadoMasIngresos(){
        foreach ($emplados as $empleado => $value) {
            $mayorIngresos = $this->empleado->ingresos();
        if($this->empleado->ingresos > $mayorIngresos){
            $mayorIngresos = $this->empleado->ingresos();
        }
        }
        
    }}

    

?>