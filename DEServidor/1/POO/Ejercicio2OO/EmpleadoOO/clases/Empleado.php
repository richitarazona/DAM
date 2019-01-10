<?php



abstract class Empleado {

//propiedades
public $primerNombre;
public $apellido;
public $numeroSeguridadSocial;
//constructor
function __construct($_primerNombre,$_apellido,$_numeroSeguridadSocial){
    $this->primerNombre=$_primerNombre;
    $this->apellido=$_apellido;
    $this->numeroSeguridadSocial=$_numeroSeguridadSocial;
}
//accesores y mutadores
    static function getPrimerNombre(){
            return $this->primerNombre;
}
    static function getapellido(){
            return $this->apellido;
}
    static function getNumeroSeguridadSocial(){
            return $this->numeroSeguridadSocial;
}

    function setPrimerNombre($_primerNombre){
        $this->primerNombre=$_primerNombre;
    }
    function setApellido($_apellido){
        $this->apellido=$_papellido;
    }
    function setNumeroSeguridadSocial($_numeroSeguridadSocial){
        $this->numeroSeguridadSocial=$_numeroSeguridadSocial;
    }
    //funciones
function mostrar(){
    echo "Primer Nombre: " . $this->primerNombre . "<br /><br />
    apellido:  " .$this->apellido . "<br /><br />" .
    "numero SS: " .$this->numeroSeguridadSocial . "<br /><br />" ;}

     abstract public function ingresos(); 
}


    ?>