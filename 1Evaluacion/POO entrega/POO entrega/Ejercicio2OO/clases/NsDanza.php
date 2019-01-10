<?php

namespace DanzaName;

class Actividad{
    //creamos los
    private $id;
    private $descripcion;
    private $fecha;
    private $lugar;

    function __construct($_id, $_descripcion, $_fecha, $_lugar){
        $this->id = $_id;
        $this->descripcion = $_descripcion;
        $this->fecha = $_fecha;
        $this->lugar = $_lugar;
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

  
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of lugar
     */ 
    public function getLugar()
    {
        return $this->lugar;
    }

    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    function mostrar(){
        echo "La actividad: -" . $this->getDescripcion(). "-".
        " se realizara en: -" . $this->getLugar(). "-".
        " el dia: " . $this->getFecha();

    }
}

class Baile extends Actividad{
    static $profesor;
    private $claseHora;

    function __construct($_id, $_descripcion, $_fecha, $_lugar,$_profesor, $_claseHora){
        parent::__construct($_id, $_descripcion, $_fecha, $_lugar);
        //para acceder a un miembro estatico utilizamos el operador ::
        self::$profesor = $_profesor;
        $this->claseHora = $_claseHora;
    }


    /**
     * Get the value of profesor
     */ 
    public function getProfesor()
    {       //*** Se puede hacer de las dos maneras???? */
        //return $this->profesor;
        return $this::$profesor;
    }

    public function setProfesor($profesor)
    {
        $this::$profesor = $profesor;

        return $this;
    }

    /**
     * Get the value of claseHora
     */ 
    public function getClaseHora()
    {
        return $this->claseHora;
    }

    public function setClaseHora($claseHora)
    {
        $this->claseHora = $claseHora;

        return $this;
    }

    function mostrar(){
        //accedemos a miembros estaticos desde fuera de la clase utilizamos ::
        echo Actividad::mostrar() . "<br>" .
        "Profesor: " . $this->getprofesor(). "<br>" .
        " Hora de la clase: " . $this->getclaseHora();
    }
}







?>