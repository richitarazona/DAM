<?php
class Empresa {

    private $empleados = [];
    private $ingresos = 0;
    private $empleadoMayorIngresos = 0;
    private $numMinimo = 0;

    function __construct(){
        $this->empleados = array();
    }

    function addEmpleado($empleado){
        $this->empleados[] = $empleado;
    }
    

    function listarEmpleados(){
        foreach ($this->$emplados as $empleado ) {
            echo "EMPLEADO: " . $empleado->mostrar()  ;   
    }}   

    function Ingresos(){
        foreach ($this->$emplados as $empleado ) {
    echo "Los ingresos de: " . $this->empleado . " son:" . $this->empleado->ingresos();

        }{
       
        }
    }
    function empleadoMasIngresos(){
        foreach ($this->$emplados as $empleado ) {
           
        if($this->empleado->ingresos() > $numMinimo){
            $empleadoMayorIngresos = $empleado;
            $numMinimo = $empleado->ingresos();
        }
        }
        echo "Empleado mayor ingresos es: " . $empleadoMayorIngresos->mostrar();
    }}

    

?>