<?php



class EmpleadoAsalariado extends Empleado 
{
    private $horasTrabajadas;
    private $tarifaComision;

    public function __construct($_primerNombre, $_apellido, $_numSS, $_horasTrabajadas, $_tarifaComision){
        parent::__construct($_primerNombre, $_apellido, $_numSS, $_horasTrabajadas);
        $this->horasTrabajadas = $_horasTrabajadas;
        $this->tarifaComision = $_tarifaComision;

    }


    /**
     * Get the value of horasTrabajadas
     */ 
    public function getHorasTrabajadas()
    {
        return $this->horasTrabajadas;
    }

    public function setHorasTrabajadas($horasTrabajadas)
    {
        $this->horasTrabajadas = $horasTrabajadas;

        return $this;
    }

    /**
     * Get the value of tarifaComision
     */ 
    public function getTarifaComision()
    {
        return $this->tarifaComision;
    }

    public function setTarifaComision($tarifaComision)
    {
        $this->tarifaComision = $tarifaComision;

        return $this;
    }

    public function ingresos(){
        
        return $this->getHorasTrabajadas() * $this->gettarifaComision()."<br>"."<hr>";

    }
}


?>