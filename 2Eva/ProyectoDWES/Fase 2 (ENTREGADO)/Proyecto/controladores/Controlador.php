<?php
/**
 * @author	Equipo 1
 * @version	Jueves, 10 de Enero, 2019.
 */
include 'helper/ValidadorForm.php';
include 'helper/input.php';
include 'helper/Utilidades.php';
class Controlador {   
    /**
     * Recoge los datos del formulario y los muestra. 
     */
    public function run() {
        if (Input::siEnviado('post')) {
            $this->validar();

        } else {
            //no se ha enviado el formulario 
            //primera petición
            //se llama al método para mostrar el formulario inicial
            $this-> mostrarFormulario('inicio', null, null);
        }
    }

    /**
     * Muestra la vista del formulario (la plantilla formulario_registro.php)   
     * @param $resultado 
     * @param $errores 
    */
    private function mostrarFormulario($fase ,$resultado, $errores) {
        include "vistas/formulario_registro.php"; 
    }

    /**
     * Funcion que comprueba que sean validos y muestra los resultados.
     */
    private function validar() {
        $validador = new ValidadorForm();
        $reglasValidacion = $validador->crearReglasDeValidacion();
        $validador -> validar($_POST, $reglasValidacion);
        if ($validador -> esValido()) {
            //Formulario correcto
            //Recoge los datos y volver a mostar
            //Formulario con el restultado

            $usuario = Utilidades::sanearDatos($_POST["usuario"]);
            $email = Utilidades::sanearDatos($_POST["email"]);

            //Se guarda la fecha en una variable de tipo DateTime para formatearla
            $fecha = date_create(Utilidades::sanearDatos($_POST["fechaNacimiento"]));
            $fecha_formateada = date_format($fecha, "d/m/Y");

            $nombre= Utilidades::sanearDatos($_POST["nombre"]);
            $clase = Utilidades::sanearDatos($_POST["clase"]);
            $fuerza = Utilidades::sanearDatos($_POST["fuerza"]);

            $resultado = "Usuario: ".$usuario."<br>";
            $resultado = $resultado."Email: ".$email."<br>";
            $resultado = $resultado."Fecha de nacimiento: ".$fecha_formateada."<br>";
            $resultado = $resultado."Nombre Personaje: ". $nombre."<br>";
            $resultado = $resultado."Tipo de Personaje: ".$clase."<br>";
            $resultado = $resultado."Nivel de fuerza: ".$fuerza."<br>";
            
            $this->mostrarFormulario('resul',$resultado, null);
            exit();
        }
        $errores = $validador->mostrarErrores();
        $this->mostrarFormulario('error', null, $errores);
        exit();
    }
}
?>