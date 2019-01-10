<?php



class EmpleadoPorComision extends Empleado{
    private $ventasBrutas;
    private $tarifaComision;

public function __construct($_primerNombre, $_apellido, $_numSS,$_ventasBrutas,$_tarifaComision){
    parent::__construct($_primerNombre, $_apellido, $_numSS);
    $this->ventasBrutas= $_ventasBrutas;
    $this->tarifaComision = $_tarifaComision;
}

    public function getVentasBrutas()
    {
        return $this->ventasBrutas;
    }

    public function setVentasBrutas($ventasBrutas)
    {
        $this->ventasBrutas = $ventasBrutas;

        return $this;
    }

    /**
     * Get the value of tarifaCOmision
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
        return $this->getVentasBrutas() * $this->getTarifaComision()."<br>"."<hr>";
    }
}
   

?>