
<?php
include 'clases/NsDanza.php';
use DanzaName\Actividad as act;
use DanzaName\Baile as Bai;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">

    <title>Document</title>
</head>
<body>
<?php
include 'includes/cabecera.php';

$actv1 = new NsDanza\Actividad(1, 'Concierto de Rock', '23/12/2018', 'Pamplona');
$actv2 = new act(2, 'Taller de manualidades', '2/4/2010', 'Tarazona');

$baile1 = new Bai(3, 'Baile de Mascaras', '12/12/2012', 'Meson de la Navarreria', 'Richi', 'Aula 2 21:00');

$actv1->mostrar();
echo "<hr>";
$actv2->mostrar();
echo "<hr>";
$baile1->mostrar();
echo "<hr>";
$actv1->setLugar('Plaza Castillo');
$actv1->mostrar();
echo "<hr>";





include 'includes/pie.php';
?>
</body>
</html>