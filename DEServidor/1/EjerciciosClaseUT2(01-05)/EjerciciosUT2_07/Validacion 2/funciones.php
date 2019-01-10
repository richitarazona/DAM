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

function validar($personas){
    foreach ($personas as $persona) {

        if ($persona["nombre"]== "") {
           
            # code...
        }if ($persona["apellidos"]== "") {
            echo "Hay personas sin apellidos";
            # code...
        }if ($persona["mail"]== "" || array_search("@",$persona["mail"])==false){
            echo "hay mails incoreectos";
        }else{
            echo "Todo correcto";
        }
    }


    
}





//function validar2(): Lss argumentos son 2 arrays:un array que representa
//los campos de un registro y el otro las reglas a cumplir de los campos
//Todos los arrays incluida la devolución de erroresson asociativos
    //en otro array (Todos los arrays son asociativos)


   /* $reglasValidacion = array("nombre" => array("required" => true),
    "apellidos" => array("required" =>true),
    "edad" =>  array/("required" =>true);

    $errores = validar2($camposValidar, $reglaValidacion);
    if ()count($errores)== 0){
        echo "con las reglas";
        verArray($reglasValidacion);
        echo "los datos son validos"*/


    
    //recorro las reglas de validación de cada campo

    //De cada campo obtengo sus reglas de validación

    //compruebo si cumple que es el campo requerido
    //en caso de ser requerido y no tener valor
    //
    //incluyo en un array el error

    //devuelve el array errores



?>