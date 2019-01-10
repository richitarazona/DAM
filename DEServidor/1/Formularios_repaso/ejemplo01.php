<?php

    include "cabecera.php";

    $id = $_GET['id'];
    $modulo = $_GET['modulo'];
    $horas = $_GET['horas'];

    echo "id = $id<br/>Modulo = $modulo<br/> Horas = $horas";


    include "pie.php";
?>