<?php 
/**
 * @author	Equipo 1
 * @version	Jueves, 17 de Enero, 2019.
 */
class Input {
    /**
     * Función que mantiene los datos de los input tipo text en el formulario
     */
    public static function get($dato) {
        if (isset($_POST[$dato])) {
            return Utilidades::sanearDatos($_POST[$dato]);
        } else {
            return "";
        }
    }
    /**
     * Función que mantiene los datos de los input tipo select en el formulario
     */
    public static function getOption($dato, $valor) {
        $dato = $dato;
        if (isset($_POST[$dato])) {
            if ($_POST[$dato] == $valor){
                return 'selected';
            }
            return '';
        } else {
            if ($valor == 0) {
                return 'selected';
            }
            return '';
        }
    }
    /**
     * Función que mantiene los datos de los input tipo radio en el formulario
     */
    public static function getRadio($dato, $valor) {
        $dato = $dato;
        if (isset($_POST[$dato])) {
            if ($_POST[$dato] == $valor) {
                return 'checked';
            }
            return '';
        } else {
            return '';
        }
    }
    /**
     * Función que comprueba si el formulario se ha enviado
     */
    public static function siEnviado($tipo = 'post') {
        switch ($tipo) {
            case 'post':
                return (!empty($_POST)) ? true : false;
                break;
            case 'get':
                return (!empty($_GET)) ? true : false;
            default:
                return false;
                break;
        }
    }
}

?>