<?php
#arreglo que se va a mostrar en el index de la evidencia A4
$filas = array (
  array("",1,2,3,4,5),
  array(1,"L","L","L","L","L"),
  array(2,"L","L","L","L","L"),
  array(3,"L","L","L","L","L"),
  array(4,"L","L","L","L","L"),
  array(5,"L","L","L","L","L")
);

# utilizo la propiedad isset para que no ingrese nullo ni vacios a la variable
if (!isset($_POST['fila']) and !isset($_POST['puesto'])and !isset($_POST['escoger'])) {
  echo ("funciona");
}
else {
  $fila = $_POST['fila'];
  $puesto = $_POST['puesto'];
  $escoger = $_POST['escoger'];
  echo $fila,$puesto,$escoger;

  recibir($filas,$fila,$puesto,$escoger);
}
#print_r($_POST);
function recibir($filas,$fila,$puesto,$escoger){
    #volver string la matriz
    #$cadena = json_encode($filas);
    #$cadena2 = var_export($filas);
    $valor = $filas[$fila][$puesto];
    #condicion para validar el arreglo
    if ($valor == $escoger) {
      echo "<script language='javascript'> alert(' Error Puesto ya se encuentra libre'); </script>";
    }
    elseif ($escoger == "R") {
      $filas[$fila][$puesto] = $escoger;
      echo $filas[$fila][$puesto];
    }

}

?>