<?php



abstract class Empleado{

    private $primerNombre;
    private $apellido;
    private $numSS;

   public function __construct($_primerNombre, $_apellido, $_numSS){

    $this->primerNombre = $_primerNombre;
    $this->apellido = $_apellido;
    $this->numSS = $_numSS;

   }

    /**
     * Get the value of primerNombre
     */ 
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of numSS
     */ 
    public function getNumSS()
    {
        return $this->numSS;
    }

    public function setNumSS($numSS)
    {
        $this->numSS = $numSS;

        return $this;
    }

    public function mostrar(){
        echo "Empleado: " . $this->getPrimerNombre()."<br>".
        "Apellido: " . $this->getApellido()."<br>".
        "Numero SS: " . $this->getNumSS()."<br>"."<hr>";

    }

    abstract public function ingresos();
}

?>