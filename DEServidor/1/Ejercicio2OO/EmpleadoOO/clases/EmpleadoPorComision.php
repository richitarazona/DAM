<?php

class EmpleadoPorComision extends Empleado {
    //atributos
    private $ventasBrutas;
    private $tarifaComision;
    //constructores
    function __construct($primerNombre,$apellido,$numeroSeguridadSocial,$_ventasBrutas,$_tarifaComision){
        $this->ventasBrutas=$_ventasBrutas;
        $this->tarifaComision=$_tarifaComision;
        parent::__construct($primerNombre,$apellido,$numeroSeguridadSocial);
    }
    //accesores y mutadores
    static function getVentasBrutas(){
        return $this->ventasBrutas;
    }
    static function getTarifaComision(){
        return $this->tarifaComision;
    }
    static function setVentasBrutas($_ventasBrutas){
        $this->ventasBrutas=$_ventasBrutas;
    }
    static function setTarifaComision($_tarifaComision){
        $this->tarifaComision=$_tarifaComision;
    }
    //funcion 
    function ingresos(){
        $ingresos = $this->tarifaComision() * $this->ventasBrutas();
        return $ingresos;
    }
    function mostrar(){
        echo "Primer Nombre: " . ($this->primerNombre) . "<br /><br />
        apellido:  " .($this->apellido) . "<br /><br />" .
        "numero SS: " .($this->numeroSeguridadSocial) . "<br /><br />" ;}
        }
?>