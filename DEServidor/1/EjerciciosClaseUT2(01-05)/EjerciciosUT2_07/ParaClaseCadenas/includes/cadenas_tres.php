<?php

$texto = "<span class=\"texto\"> Texto</span> con etiquetas <strong>HTML</strong> ";
$x = strip_tags($texto);
echo $x."<br>";

$texto = "<span class=\"texto\"> Texto</span> con etiquetas <strong>HTML</strong> ";
$y = str_replace("e","*",$texto);
echo $y."<br>";

$texto = "<span class=\"texto\"> Texto</span> con etiquetas <strong>HTML</strong> ";
$a = htmlspecialchars($texto);
echo $a."<br>";



?>