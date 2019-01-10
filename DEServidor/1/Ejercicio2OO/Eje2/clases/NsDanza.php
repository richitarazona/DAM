<?php
/**
 * Description of namespaces
 *
 * @author Ricardo
 */

namespace NsDanza;

    
     class Actividad{

        //propiedades
    private $id;
    private $descripcion;
    private $fecha;
    private $lugar;

        //constructor
    function __construct($_id, $_descripcion, $_fecha, $_lugar){
        echo "<br>/>Entra el constructor";
        $this->id = $_id;
        $this->descripcion = $_descripcion;
        $this->fecha = $_fecha;
        $this->lugar = $_lugar;
    }

    //accesores y mutadores
    static function getId(){
        return $this->id;
    }
    static function getDescripcion(){
        return $this->descripcion;
    }
    static function getFecha(){
        return $this->fecha;
    }
    static function getLugar(){
        return $this->lugar;
    }
    function setId($id){
        $this->id =$id;
    }
    function setDescripcion($descripcion){
        $this->id =$descripcion;
    }
    function setfecha($fecha){
        $this->id =$fechas;
    }
    function setLugar($lugar){
        $this->id =$lugar;
    }
     function mostrar(){
        echo "la actividad es: " . $this->getDescripcion().
    "se organizara en :" . $this->getLugar() .
"el :"  . $this->getFecha();

    }   
}   
//Actividad

class Baile extends Actividad
{
    static $profesor;
    private $claseHora;

    function __construct($_id, $_descripcion, $_fecha, $_lugar,$_profesor,$_claseHora){
        self::$profesor=$_profesor;
        $this->claseHora=$_claseHora;
        parent::__construct($_id, $_descripcion, $_fecha, $_lugar);
    }
    function getProfesor(){
        return $this->profesor;
    }
    function setProfesor($_profesor){
        $this->profesor=$_profesor;
    }
    function getclaseHora(){
        return $this->profesor;
    }
    function setclaseHora($_claseHora){
        $this->profesor=$_claseHora;
    }

 

     function mostrar(){
        echo parent::mostrar() . "<br> ".
        "profesor: " . $this->getProfesor();

    }
    
    }


?>