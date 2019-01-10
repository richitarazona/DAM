<?php

class Empresa{
    //creamos un array para los empleados
    private $empleados=[];
    private $min = -99999999999;
    private $empleadoMasIngresos;

   public function addEmpleado(Empleado $emple){
       $this->empleados[] = $emple;
   }

   public function getEmpleados(){
       return $this->empleados;
   }

   public function listarEmpleados(){
    echo "Los empleados de la empresa son:" . "<br>"."<hr>";

    foreach ($this->empleados as $empleado){//----------------------------
        
        echo "Empleado: " . $empleado->getPrimerNombre()."<br>";
        echo "Apellido: " . $empleado->getApellido()."<br>";
        echo "Numero SS: " . $empleado->getNumSS()."<br>"."<hr>";
    }

   }

   public function ListarIngresos(){
    echo "<h3>LISTADO DE INGRESOS</h3>";
    ECHO "<hr>";

    foreach($this->empleados as $empleado){
        echo "<br>"."los ingresos de : " .$empleado->getPrimerNombre()." ";
        echo $empleado->ingresos();
    }

   }

   public function empleadoMasIngresos(){
        if(!empty($this->empleados)){
            foreach($this->empleados as $empleado){
                if($empleado->ingresos() > $this->min){
                    $empleadoMasIngresos = $empleado;
                    $this->min = $empleado->ingresos();
                }
            }
        }

            echo "El empleado con mas ingresos es : " . $empleadoMasIngresos->getPrimerNombre();

   }

   public function eliminarEmpleado(){
       unset($this->empleados[1]);
   }
}




?>