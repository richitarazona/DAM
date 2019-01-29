<?php 
/**
 * @author	Equipo 1
 * @version	Jueves, 21 de Enero, 2019.
 */

class ValidadorForm {
    private $errores = array();
    private $reglasValidacion = null;
    private $valido = true;

    public function __construct() {}
    /**
     * Función que inicializa el array de reglas de validación
     */
    public function crearReglasDeValidacion() {
        $reglasValidacion = array(
            "usuario" => array("required" => true),
            "email" => array("required" => true),
            "contrasena" => array("required" => true, "coincide" => 1),
            "confirmarpassword" => array("required" => true, "coincide" => 1),
            "fechaNacimiento" => array("required" => true),
            "nombre" => array("required" => true),
            "clase" => array("required" => true),
            "fuerza" => array("required" => true)
        );
        return $reglasValidacion;
    }
    /** 
     * Función que valida los datos  de la fuente
     * 
     * @param $fuente - la variable con los datos a validar (habitualmente el $_POST)
     * @param $reglasValidacion - array que contiene las reglas para validar la fuente
     */
    public function validar($fuente, $reglasValidacion) {
        // Variables para la comprobación de contraseña o campos que deben coincidir
        $coincideId = 0;   
        $coincideDato = "";
        $coincideNombre = "";
        foreach ($reglasValidacion as $campo => $valor) {
            $existeCampo = (isset($fuente[$campo])) && Utilidades::sanearDatos($fuente[$campo]) != "";
            if (!(($existeCampo == $valor["required"]) || $existeCampo)) {
                $this->addError($campo, "El campo " . $campo . " es obligatorio.");
            }
            if (isset($valor["coincide"])) {
                if ($valor["coincide"] == $coincideId) {
                    if(Utilidades::sanearDatos($fuente[$campo]) != $coincideDato) {
                        $this->addError($campo, "Los campos " . $campo . " y ". $coincideNombre . " no coinciden.");
                    }
                } else {
                    $coincideId = $valor["coincide"];
                    $coincideDato = Utilidades::sanearDatos($fuente[$campo]);
                    $coincideNombre = $campo;
                }
            }
        }
    }
    /**
     * Funcion que añade los errores al array de errores
     */
    public function addError($nombreCampo, $error) {
        $this->errores[$nombreCampo] = $error;
        if ($this -> valido){
            $this->valido = false;
        }
    }

    /** 
    * Devuelve el mensaje de error de un error existente.
    */
    public function getMensajeError($campo) {
        if (array_key_exists($campo, $this->errores)) {
            return $this->errores[$campo];
        }
        return "";
    }
    /**
     * Devuelve todos los errores en forma de string
     * @return $error - string con los errores
     */
    public function mostrarErrores() {
        $error = "";
        foreach ($this->errores as $campo => $mensaje) {
            $error = $error . $mensaje . "<br/ >";
        }

        return $error;
    }

    /**
     * Función que devuelve si es válida o no la fuente
     * @return $valido
     */
    public function esValido() {
        return $this->valido;
    }

    /**
     * Devuelve el valor de $errores
     * @return $errores
     */ 
    public function getErrores() {
        return $this->errores;
    }

    /**
     * Devuelve el valor de $reglasValidacion
     * @return $reglasValidacion
     */  
    public function getReglasValidacion() {
        return $this->reglasValidacion;
    }
}