<?php
include "includes/funciones.php";
$resultado = "";
$estaPais = false;
$soloPaises = array();
$soloCapitales = array();
$Capital_pasada_como_valor = "Madrid";

$paisesCapitales = array('España' => 'Madrid' , 'Alemania' => 'Berlín', 'Austria' => 'Viena', 'Bélgica' => 'Bruselas', 'Bulgaria' => 'Sofía', 'Croacia' => 'Zagreb');

$resultado .= '<h2>Mostrar paises con sus capitales</h2>';
    $resultado .= verArray2($paisesCapitales). "<br><hr>";

$resultado .= '<h2>Mostrar paises con sus capitales ordenados por calve</h2>';
    ksort($paisesCapitales);
    $resultado .= verArray2($paisesCapitales). "<br><hr>";

$resultado .= '<h2>Mostrar paises con sus capitales ordenados por valor</h2>';
    asort($paisesCapitales);
    $resultado .= verArray2($paisesCapitales). "<br><hr>";


foreach ($paisesCapitales as $pais => $capital) {
    if(strtolower($pais) == 'italia'){
        $estaPais = true;
        break;
    }
}

$resultado .= '<h2>Comprabación de paises en el array</h2>';
if ($estaPais) {
    $resultado .= '<h4>Italia si que está entre los paises guardados en el array</h4>'. "<br><hr>";   
}else {
    $resultado .= '<h4>Italia no está entre los paises guardados en el array</h4>'. "<br><hr>";
}


$resultado .= '<h2>Paises sin capitales</h2>';
foreach ($paisesCapitales as $pais => $capital) {
   $soloPaises[] = $pais;
}

foreach ($soloPaises as $pais) {
    $resultado .= "<h4> $pais </h4>";
}
$resultado .= "<br><hr>";
$resultado .= '<h2>Capitales sin paises</h2>';
foreach ($paisesCapitales as $pais => $capital) {
   $soloCapitales[] = $capital;
}

foreach ($soloCapitales as $capital) {
    $resultado .= "<h4>$capital</h4>";
}
$resultado .= "<br><hr>";
foreach ($paisesCapitales as $pais => $capital) {
    if (strtolower($capital) == strtolower($Capital_pasada_como_valor)) {
        $resultado .= "<h4>País: $pais Capital: $capital</h4>";
    }
 }



include "includes/resultado.php";

?>

