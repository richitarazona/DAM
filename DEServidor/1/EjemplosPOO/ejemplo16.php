<?php

// Definición de la clase Prueba
class Prueba {

    private $resultado;

    function getResultado() {
        return $this->resultado;
    }

    function __call($met, $var) {
        // en el parámetro $met se recibe el nombre del método
        //  en el parámetro $var se recibe una matriz con los
        // parámetros utilizados en la llamada al método 

        if ($met == "test") {
            // aquí incluimos una lógica para gestionar la
            // sobrecarga
            // si la variable es integer se llama
            // a la función test para numéricos
            if (gettype($var[0]) == "integer") {
                $this->test_numerico($var);
            }
            // caso contrario, se llama a la función
            // test para cadenas
            else {
                $this->test_cadena($var);
            }
        }
    }

    // método privado para tratar parámetro integer
    private function test_numerico($var) {
        $this->resultado = $var[0] * 5;
    }

    // método privado para tratar parámetro cadena
    private function test_cadena($var) {
        $this->resultado = $var[0] . " es texto";
    }

}

include 'vistas/cabecera.php';
echo "Simulación de sobrecarga de métodos <br /><br />";  //Quitar el cierre de la línea en blanco y ver el resultado"
$a = new Prueba;
$resultado= "";
// la sobrecarga de métodos significa llamar a un mismo método
// pero con distintos tipos de parámetros o con distinta
// cantidad de parámetros
// En este ejemplo siempre se llama al método Test
// el método en realidad no existe, pero en la clase
// está definido el método __call que recibe las llamadas a
// métodos no existentes, 
// allí podremos colocar la lógica necesaria para simular
// la sobrecarga de métodos

$a->test(8);  // se usa el método test con números

$resultado .= "Método test: proceso con argumento numérico: ". $a->getResultado() ."<br />";

$a->test("Esto "); // se usa el método test con cadenas

$resultado .="Método test: proceso con argumento de cadena: " . $a->getResultado() . "<br />";

echo $resultado;
include'vistas/pie.php';
?>