<?php
#require_once ('evidenciaA4.php');

if (!isset($_POST['fila']) and !isset($_POST['puesto'])and !isset($_POST['escoger'])) {
    echo ("funciona");
}
else {
    $fila = $_POST['fila'];
    $puesto = $_POST['puesto'];
    $escoger = $_POST['escoger'];
    echo $fila,$puesto,$escoger;
}

#$valor=$filas[$fila][$puesto];

?>