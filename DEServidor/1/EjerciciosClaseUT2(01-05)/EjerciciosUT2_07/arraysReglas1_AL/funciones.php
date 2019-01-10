<?php
/**
* Ejemplo para algunos frameworks tienen establkecidas las validaciones 
* 

* @author karmele Arocena <karmeled@hotmail.com>
* @copyright 2018 Karmele
* @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
* @version 2018-10-09
* @link https://docentes.educacion.navarra.es/carocena/ArraysReglas
*/
function verArray($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

//function validar1(): El argumento es el array de datos a validar.

function validar($persona){
    $errores = array();

        if (empty($persona["nombre"])) {
           $errores['nombre'] = "El nombre no puede estar vacio";
        }if ($persona["apellidos"] == "") {
            $errores['apellidos'] = "El apellido no puede estar vacio";
        }if ($persona["mail"]== "" ){
            $errores['mail'] = "hay mails incoreectos";
        }
        return $errores;
  
}




//function validar2(): Lss argumentos son 2 arrays:un array que representa
//los campos de un registro y el otro las reglas a cumplir de los campos
//Todos los arrays incluida la devolución de erroresson asociativos
    //en otro array (Todos los arrays son asociativos)
function validar2($persona,$reglas){
    $errores = array();
    //recorro las reglas de validación de cada campo
    foreach ($reglas as $campo => $value) {
    //De cada campo obtengo sus reglas de validación
    foreach ($value as $regla => $valor) {
            if($regla == 'required' && $valor){
                if($persona[$campo] == ""){
                    $errores[$campo] = "El campo $campo no puede estar vacio";
                }
            }//se ordenan las reglas por importancia,primeor min
            if($regla == 'min' && $persona['edad'] < $valor){
                $errores[$campo] = "La edad no es la correcta, debe de tener mas de $valor";
            }
        }
    }

    return $errores;



}

    //recorro las reglas de validación de cada campo

    //De cada campo obtengo sus reglas de validación

    //compruebo si cumple que es el campo requerido
    //en caso de ser requerido y no tener valor
    //
    //incluyo en un array el error

    //devuelve el array errores



?>