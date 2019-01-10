<?php

/**
 * Description of namespaces
 *
 * @author karmele
 */

namespace Espacionom;

abstract class Actividad {

    //propiedades
    static $_nombre;
    private $_fecha;

    //constructor y destructor
 

    function __construct($nombre, $fecha) {
        self::$_nombre = $nombre;
        $this->_fecha = $fecha;
        echo "Me están creando en la clase base Actividad <br />";
    }

    function __destruct() {
        echo "Me están destruyendo en la clase base Actividad <br />";
        ;
    }

    //métodos accesores y mutadores de las propiedades

    static function getNombre() {
        return self::$_nombre;
    }

    function getFecha() {
        return $this->_fecha;
    }

    static function setNombre($nombre) {
        self::$_nombre = $nombre;
    }

    function setFecha($fecha) {
        $this->_fecha = $fecha;
    }

    abstract function apuntarse();
}

class Carrera extends Actividad {

    private $_lugar;

    function __construct($lugar,$nombre, $fecha ) {
        echo "Se está ejecutando el constructor de un objeto de la subclase Carrera<br />";
        // Se fuerza la llamada al constructor de la clase base
        $this->_lugar=$lugar;
        parent::__construct($nombre, $fecha);
    }

    function __destruct() {
        echo "Se está destruyendo un objeto de la clase Carrera<br />";
    }
    function apuntarse(){
        
        echo "Me he apuntado en ".  $this->_lugar." a " .parent::$_nombre. " el día ".parent::getFecha();
    }
}
